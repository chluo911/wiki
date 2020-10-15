<?php

/**
 * @group ResourceLoader
 */
class ResourceLoaderImageTest extends ResourceLoaderTestCase
{
    protected $imagesPath;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function getTestImage($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function provideGetPath()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ResourceLoaderImage::getPath
     * @dataProvider provideGetPath
     */
    public function testGetPath($imageName, $languageCode, $path)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ResourceLoaderImage::getExtension
     * @covers ResourceLoaderImage::getMimeType
     */
    public function testGetExtension()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ResourceLoaderImage::getImageData
     * @covers ResourceLoaderImage::variantize
     * @covers ResourceLoaderImage::massageSvgPathdata
     */
    public function testGetImageData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ResourceLoaderImage::massageSvgPathdata
     */
    public function testMassageSvgPathdata()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

class ResourceLoaderImageTestable extends ResourceLoaderImage
{
    // Make some protected methods public
    public function massageSvgPathdata($svg)
    {
        return parent::massageSvgPathdata($svg);
    }
    // Stub, since we don't know if we even have a SVG handler, much less what exactly it'll output
    public function rasterize($svg)
    {
        return 'RASTERIZESTUB';
    }
}
