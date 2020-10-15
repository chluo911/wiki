<?php
class CaptchaSpecialPage extends UnlistedSpecialPage
{
    public function __construct()
    {
        parent::__construct('Captcha');
    }

    public function execute($par)
    {
        $this->setHeaders();

        $instance = ConfirmEditHooks::getInstance();

        switch ($par) {
            case "image":
                if (method_exists($instance, 'showImage')) {
                    return $instance->showImage();
                }
                // no break
            case "help":
            default:
                return $instance->showHelp();
        }
    }
}
