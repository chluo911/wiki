<?php
/**
 * Handler for DjVu images.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup Media
 */

/**
 * Handler for DjVu images
 *
 * @ingroup Media
 */
class DjVuHandler extends ImageHandler
{
    const EXPENSIVE_SIZE_LIMIT = 10485760; // 10MiB

    /**
     * @return bool
     */
    public function isEnabled()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param File $file
     * @return bool
     */
    public function mustRender($file)
    {
        return true;
    }

    /**
     * True if creating thumbnails from the file is large or otherwise resource-intensive.
     * @param File $file
     * @return bool
     */
    public function isExpensiveToThumbnail($file)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param File $file
     * @return bool
     */
    public function isMultiPage($file)
    {
        return true;
    }

    /**
     * @return array
     */
    public function getParamMap()
    {
        return [
            'img_width' => 'width',
            'img_page' => 'page',
        ];
    }

    /**
     * @param string $name
     * @param mixed $value
     * @return bool
     */
    public function validateParam($name, $value)
    {
        if ($name === 'page' && trim($value) !== (string)intval($value)) {
            // Extra junk on the end of page, probably actually a caption
            // e.g. [[File:Foo.djvu|thumb|Page 3 of the document shows foo]]
            return false;
        }
        if (in_array($name, [ 'width', 'height', 'page' ])) {
            if ($value <= 0) {
                return false;
            } else {
                return true;
            }
        } else {
            return false;
        }
    }

    /**
     * @param array $params
     * @return bool|string
     */
    public function makeParamString($params)
    {
        $page = isset($params['page']) ? $params['page'] : 1;
        if (!isset($params['width'])) {
            return false;
        }

        return "page{$page}-{$params['width']}px";
    }

    /**
     * @param string $str
     * @return array|bool
     */
    public function parseParamString($str)
    {
        $m = false;
        if (preg_match('/^page(\d+)-(\d+)px$/', $str, $m)) {
            return [ 'width' => $m[2], 'page' => $m[1] ];
        } else {
            return false;
        }
    }

    /**
     * @param array $params
     * @return array
     */
    public function getScriptParams($params)
    {
        return [
            'width' => $params['width'],
            'page' => $params['page'],
        ];
    }

    /**
     * @param File $image
     * @param string $dstPath
     * @param string $dstUrl
     * @param array $params
     * @param int $flags
     * @return MediaTransformError|ThumbnailImage|TransformParameterError
     */
    public function doTransform($image, $dstPath, $dstUrl, $params, $flags = 0)
    {
        global $wgDjvuRenderer, $wgDjvuPostProcessor;

        if (!$this->normaliseParams($image, $params)) {
            return new TransformParameterError($params);
        }
        $width = $params['width'];
        $height = $params['height'];
        $page = $params['page'];

        if ($flags & self::TRANSFORM_LATER) {
            $params = [
                'width' => $width,
                'height' => $height,
                'page' => $page
            ];

            return new ThumbnailImage($image, $dstUrl, $dstPath, $params);
        }

        if (!wfMkdirParents(dirname($dstPath), null, __METHOD__)) {
            return new MediaTransformError(
                'thumbnail_error',
                $width,
                $height,
                wfMessage('thumbnail_dest_directory')->text()
            );
        }

        // Get local copy source for shell scripts
        // Thumbnail extraction is very inefficient for large files.
        // Provide a way to pool count limit the number of downloaders.
        if ($image->getSize() >= 1e7) { // 10MB
            $work = new PoolCounterWorkViaCallback(
                'GetLocalFileCopy',
                sha1($image->getName()),
                [
                    'doWork' => function () use ($image) {
                        return $image->getLocalRefPath();
                    }
                ]
            );
            $srcPath = $work->execute();
        } else {
            $srcPath = $image->getLocalRefPath();
        }

        if ($srcPath === false) { // Failed to get local copy
            wfDebugLog(
                'thumbnail',
                sprintf(
                    'Thumbnail failed on %s: could not get local copy of "%s"',
                    wfHostname(),
                    $image->getName()
                )
            );

            return new MediaTransformError(
                'thumbnail_error',
                $params['width'],
                $params['height'],
                wfMessage('filemissing')->text()
            );
        }

        # Use a subshell (brackets) to aggregate stderr from both pipeline commands
        # before redirecting it to the overall stdout. This works in both Linux and Windows XP.
        $cmd = '(' . wfEscapeShellArg(
            $wgDjvuRenderer,
            "-format=ppm",
            "-page={$page}",
            "-size={$params['physicalWidth']}x{$params['physicalHeight']}",
            $srcPath
        );
        if ($wgDjvuPostProcessor) {
            $cmd .= " | {$wgDjvuPostProcessor}";
        }
        $cmd .= ' > ' . wfEscapeShellArg($dstPath) . ') 2>&1';
        wfDebug(__METHOD__ . ": $cmd\n");
        $retval = '';
        $err = wfShellExec($cmd, $retval);

        $removed = $this->removeBadFile($dstPath, $retval);
        if ($retval != 0 || $removed) {
            $this->logErrorForExternalProcess($retval, $err, $cmd);
            return new MediaTransformError('thumbnail_error', $width, $height, $err);
        } else {
            $params = [
                'width' => $width,
                'height' => $height,
                'page' => $page
            ];

            return new ThumbnailImage($image, $dstUrl, $dstPath, $params);
        }
    }

    /**
     * Cache an instance of DjVuImage in an Image object, return that instance
     *
     * @param File|FSFile $image
     * @param string $path
     * @return DjVuImage
     */
    public function getDjVuImage($image, $path)
    {
        if (!$image) {
            $deja = new DjVuImage($path);
        } elseif (!isset($image->dejaImage)) {
            $deja = $image->dejaImage = new DjVuImage($path);
        } else {
            $deja = $image->dejaImage;
        }

        return $deja;
    }

    /**
     * Get metadata, unserializing it if neccessary.
     *
     * @param File $file The DjVu file in question
     * @return string XML metadata as a string.
     * @throws MWException
     */
    private function getUnserializedMetadata(File $file)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Cache a document tree for the DjVu XML metadata
     * @param File $image
     * @param bool $gettext DOCUMENT (Default: false)
     * @return bool|SimpleXMLElement
     */
    public function getMetaTree($image, $gettext = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getImageSize($image, $path)
    {
        return $this->getDjVuImage($image, $path)->getImageSize();
    }

    public function getThumbType($ext, $mime, $params = null)
    {
        global $wgDjvuOutputExtension;
        static $mime;
        if (!isset($mime)) {
            $magic = MimeMagic::singleton();
            $mime = $magic->guessTypesForExtension($wgDjvuOutputExtension);
        }

        return [ $wgDjvuOutputExtension, $mime ];
    }

    public function getMetadata($image, $path)
    {
        wfDebug("Getting DjVu metadata for $path\n");

        $xml = $this->getDjVuImage($image, $path)->retrieveMetaData();
        if ($xml === false) {
            // Special value so that we don't repetitively try and decode a broken file.
            return serialize([ 'error' => 'Error extracting metadata' ]);
        } else {
            return serialize([ 'xml' => $xml ]);
        }
    }

    public function getMetadataType($image)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function isMetadataValid($image, $metadata)
    {
        return !empty($metadata) && $metadata != serialize([]);
    }

    public function pageCount(File $image)
    {
        $info = $this->getDimensionInfo($image);

        return $info ? $info['pageCount'] : false;
    }

    public function getPageDimensions(File $image, $page)
    {
        $index = $page - 1; // MW starts pages at 1

        $info = $this->getDimensionInfo($image);
        if ($info && isset($info['dimensionsByPage'][$index])) {
            return $info['dimensionsByPage'][$index];
        }

        return false;
    }

    protected function getDimensionInfo(File $file)
    {
        $cache = ObjectCache::getMainWANInstance();
        return $cache->getWithSetCallback(
            $cache->makeKey('file-djvu', 'dimensions', $file->getSha1()),
            $cache::TTL_INDEFINITE,
            function () use ($file) {
                $tree = $this->getMetaTree($file);
                if (!$tree) {
                    return false;
                }

                $dimsByPage = [];
                $count = count($tree->xpath('//OBJECT'));
                for ($i = 0; $i < $count; $i++) {
                    $o = $tree->BODY[0]->OBJECT[$i];
                    if ($o) {
                        $dimsByPage[$i] = [
                            'width' => (int)$o['width'],
                            'height' => (int)$o['height'],
                        ];
                    } else {
                        $dimsByPage[$i] = false;
                    }
                }

                return [ 'pageCount' => $count, 'dimensionsByPage' => $dimsByPage ];
            },
            [ 'pcTTL' => $cache::TTL_INDEFINITE ]
        );
    }

    /**
     * @param File $image
     * @param int $page Page number to get information for
     * @return bool|string Page text or false when no text found.
     */
    public function getPageText(File $image, $page)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
