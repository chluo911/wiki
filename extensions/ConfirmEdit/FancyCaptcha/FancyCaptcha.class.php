<?php

use MediaWiki\Auth\AuthenticationRequest;
use MediaWiki\Auth\AuthManager;

class FancyCaptcha extends SimpleCaptcha
{
    // used for fancycaptcha-edit, fancycaptcha-addurl, fancycaptcha-badlogin,
    // fancycaptcha-accountcreate, fancycaptcha-create, fancycaptcha-sendemail via getMessage()
    protected static $messagePrefix = 'fancycaptcha-';

    /**
     * @return FileBackend
     */
    public function getBackend()
    {
        global $wgCaptchaFileBackend, $wgCaptchaDirectory;

        if ($wgCaptchaFileBackend) {
            return FileBackendGroup::singleton()->get($wgCaptchaFileBackend);
        } else {
            static $backend = null;
            if (!$backend) {
                $backend = new FSFileBackend([
                    'name'           => 'captcha-backend',
                    'wikiId'         => wfWikiID(),
                    'lockManager'    => new NullLockManager([]),
                    'containerPaths' => [ 'captcha-render' => $wgCaptchaDirectory ],
                    'fileMode'       => 777,
                    'obResetFunc'    => 'wfResetOutputBuffers',
                    'streamMimeFunc' => [ 'StreamFile', 'contentTypeFromPath' ]
                ]);
            }
            return $backend;
        }
    }

    /**
     * @return integer Estimate of the number of captchas files
     */
    public function estimateCaptchaCount()
    {
        global $wgCaptchaDirectoryLevels;

        $factor = 1;
        $sampleDir = $this->getBackend()->getRootStoragePath() . '/captcha-render';
        if ($wgCaptchaDirectoryLevels >= 1) { // 1/16 sample if 16 shards
            $sampleDir .= '/' . dechex(mt_rand(0, 15));
            $factor = 16;
        }
        if ($wgCaptchaDirectoryLevels >= 3) { // 1/256 sample if 4096 shards
            $sampleDir .= '/' . dechex(mt_rand(0, 15));
            $factor = 256;
        }

        $count = 0;
        foreach ($this->getBackend()->getFileList([ 'dir' => $sampleDir ]) as $file) {
            ++$count;
        }

        return ($count * $factor);
    }

    /**
     * Check if the submitted form matches the captcha session data provided
     * by the plugin when the form was generated.
     *
     * @param string $answer
     * @param array $info
     * @return bool
     */
    public function keyMatch($answer, $info)
    {
        global $wgCaptchaSecret;

        $digest = $wgCaptchaSecret . $info['salt'] . $answer . $wgCaptchaSecret . $info['salt'];
        $answerHash = substr(md5($digest), 0, 16);

        if ($answerHash == $info['hash']) {
            wfDebug("FancyCaptcha: answer hash matches expected {$info['hash']}\n");
            return true;
        } else {
            wfDebug("FancyCaptcha: answer hashes to $answerHash, expected {$info['hash']}\n");
            return false;
        }
    }

    public function addCaptchaAPI(&$resultArr)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function describeCaptchaType()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getFormInformation($tabIndex = 1)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Select a previously generated captcha image from the queue.
     * @return mixed tuple of (salt key, text hash) or false if no image to find
     */
    protected function pickImage()
    {
        global $wgCaptchaDirectoryLevels;

        $lockouts = 0; // number of times another process claimed a file before this one
        $baseDir = $this->getBackend()->getRootStoragePath() . '/captcha-render';
        return $this->pickImageDir($baseDir, $wgCaptchaDirectoryLevels, $lockouts);
    }

    /**
     * @param $directory string
     * @param $levels integer
     * @param $lockouts integer
     * @return Array|bool
     */
    protected function pickImageDir($directory, $levels, &$lockouts)
    {
        global $wgMemc;

        if ($levels <= 0) { // $directory has regular files
            return $this->pickImageFromDir($directory, $lockouts);
        }

        $backend = $this->getBackend();

        $key  = "fancycaptcha:dirlist:{$backend->getWikiId()}:" . sha1($directory);
        $dirs = $wgMemc->get($key); // check cache
        if (!is_array($dirs) || !count($dirs)) { // cache miss
            $dirs = []; // subdirs actually present...
            foreach ($backend->getTopDirectoryList([ 'dir' => $directory ]) as $entry) {
                if (ctype_xdigit($entry) && strlen($entry) == 1) {
                    $dirs[] = $entry;
                }
            }
            wfDebug("Cache miss for $directory subdirectory listing.\n");
            if (count($dirs)) {
                $wgMemc->set($key, $dirs, 86400);
            }
        }

        if (!count($dirs)) {
            // Remove this directory if empty so callers don't keep looking here
            $backend->clean([ 'dir' => $directory ]);
            return false; // none found
        }

        $place = mt_rand(0, count($dirs) - 1); // pick a random subdir
        // In case all dirs are not filled, cycle through next digits...
        $fancyCount = count($dirs);
        for ($j = 0; $j < $fancyCount; $j++) {
            $char = $dirs[($place + $j) % count($dirs)];
            $info = $this->pickImageDir("$directory/$char", $levels - 1, $lockouts);
            if ($info) {
                return $info; // found a captcha
            } else {
                wfDebug("Could not find captcha in $directory.\n");
                $wgMemc->delete($key); // files changed on disk?
            }
        }

        return false; // didn't find any images in this directory... empty?
    }

    /**
     * @param $directory string
     * @param $lockouts integer
     * @return Array|bool
     */
    protected function pickImageFromDir($directory, &$lockouts)
    {
        global $wgMemc;

        $backend = $this->getBackend();

        $key   = "fancycaptcha:filelist:{$backend->getWikiId()}:" . sha1($directory);
        $files = $wgMemc->get($key); // check cache
        if (!is_array($files) || !count($files)) { // cache miss
            $files = []; // captcha files
            foreach ($backend->getTopFileList([ 'dir' => $directory ]) as $entry) {
                $files[] = $entry;
                if (count($files) >= 500) { // sanity
                    wfDebug('Skipping some captchas; $wgCaptchaDirectoryLevels set too low?.');
                    break;
                }
            }
            if (count($files)) {
                $wgMemc->set($key, $files, 86400);
            }
            wfDebug("Cache miss for $directory captcha listing.\n");
        }

        if (!count($files)) {
            // Remove this directory if empty so callers don't keep looking here
            $backend->clean([ 'dir' => $directory ]);
            return false;
        }

        $info = $this->pickImageFromList($directory, $files, $lockouts);
        if (!$info) {
            wfDebug("Could not find captcha in $directory.\n");
            $wgMemc->delete($key); // files changed on disk?
        }

        return $info;
    }

    /**
     * @param $directory string
     * @param $files array
     * @param $lockouts integer
     * @return boolean
     */
    protected function pickImageFromList($directory, array $files, &$lockouts)
    {
        global $wgMemc, $wgCaptchaDeleteOnSolve;

        if (!count($files)) {
            return false; // none found
        }

        $backend  = $this->getBackend();
        $place    = mt_rand(0, count($files) - 1); // pick a random file
        $misses   = 0; // number of files in listing that don't actually exist
        $fancyImageCount = count($files);
        for ($j = 0; $j < $fancyImageCount; $j++) {
            $entry = $files[($place + $j) % count($files)];
            if (preg_match('/^image_([0-9a-f]+)_([0-9a-f]+)\\.png$/', $entry, $matches)) {
                if ($wgCaptchaDeleteOnSolve) { // captcha will be deleted when solved
                    $key = "fancycaptcha:filelock:{$backend->getWikiId()}:" . sha1($entry);
                    // Try to claim this captcha for 10 minutes (for the user to solve)...
                    if (++$lockouts <= 10 && !$wgMemc->add($key, '1', 600)) {
                        continue; // could not acquire (skip it to avoid race conditions)
                    }
                }
                if (!$backend->fileExists([ 'src' => "$directory/$entry" ])) {
                    if (++$misses >= 5) { // too many files in the listing don't exist
                        break; // listing cache too stale? break out so it will be cleared
                    }
                    continue; // try next file
                }
                return [
                    'salt'   => $matches[1],
                    'hash'   => $matches[2],
                    'viewed' => false,
                ];
            }
        }

        return false; // none found
    }

    public function showImage()
    {
        global $wgOut, $wgRequest;

        $wgOut->disable();

        $index = $wgRequest->getVal('wpCaptchaId');
        $info = $this->retrieveCaptcha($index);
        if ($info) {
            $timestamp = new MWTimestamp();
            $info['viewed'] = $timestamp->getTimestamp();
            $this->storeCaptcha($info);

            $salt = $info['salt'];
            $hash = $info['hash'];

            return $this->getBackend()->streamFile([
                'src'     => $this->imagePath($salt, $hash),
                'headers' => [ "Cache-Control: private, s-maxage=0, max-age=3600" ]
            ])->isOK();
        }

        wfHttpError(400, 'Request Error', 'Requested bogus captcha image');
        return false;
    }

    /**
     * @param $salt string
     * @param $hash string
     * @return string
     */
    public function imagePath($salt, $hash)
    {
        global $wgCaptchaDirectoryLevels;

        $file = $this->getBackend()->getRootStoragePath() . '/captcha-render/';
        for ($i = 0; $i < $wgCaptchaDirectoryLevels; $i++) {
            $file .= $hash{ $i } . '/';
        }
        $file .= "image_{$salt}_{$hash}.png";

        return $file;
    }

    /**
     * @param $basename string
     * @return Array (salt, hash)
     * @throws Exception
     */
    public function hashFromImageName($basename)
    {
        if (preg_match('/^image_([0-9a-f]+)_([0-9a-f]+)\\.png$/', $basename, $matches)) {
            return [ $matches[1], $matches[2] ];
        } else {
            throw new Exception("Invalid filename '$basename'.\n");
        }
    }

    /**
     * Delete a solved captcha image, if $wgCaptchaDeleteOnSolve is true.
     * @inheritdoc
     */
    protected function passCaptcha($index, $word)
    {
        global $wgCaptchaDeleteOnSolve;

        $info = $this->retrieveCaptcha($index); // get the captcha info before it gets deleted
        $pass = parent::passCaptcha($index, $word);

        if ($pass && $wgCaptchaDeleteOnSolve) {
            $this->getBackend()->quickDelete([
                'src' => $this->imagePath($info['salt'], $info['hash'])
            ]);
        }

        return $pass;
    }

    /**
     * Returns an array with 'salt' and 'hash' keys. Hash is
     * md5( $wgCaptchaSecret . $salt . $answer . $wgCaptchaSecret . $salt )[0..15]
     * @return array
     * @throws Exception When a captcha image cannot be produced.
     */
    public function getCaptcha()
    {
        $info = $this->pickImage();
        if (!$info) {
            throw new UnderflowException('Ran out of captcha images');
        }
        return $info;
    }

    public function getCaptchaInfo($captchaData, $id)
    {
        $title = SpecialPage::getTitleFor('Captcha', 'image');
        return $title->getLocalURL('wpCaptchaId=' . urlencode($id));
    }

    public function onAuthChangeFormFields(
        array $requests,
        array $fieldInfo,
        array &$formDescriptor,
        $action
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
