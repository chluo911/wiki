<?php

/**
 * @group ResourceLoader
 */
class ResourceLoaderImageModuleTest extends ResourceLoaderTestCase
{
    public static $commonImageData = [
        'add' => 'add.gif',
        'remove' => [
            'file' => 'remove.svg',
            'variants' => [ 'destructive' ],
        ],
        'next' => [
            'file' => [
                'ltr' => 'next.svg',
                'rtl' => 'prev.svg'
            ],
        ],
        'help' => [
            'file' => [
                'ltr' => 'help-ltr.svg',
                'rtl' => 'help-rtl.svg',
                'lang' => [
                    'he' => 'help-ltr.svg',
                ]
            ],
        ],
        'bold' => [
            'file' => [
                'default' => 'bold-a.svg',
                'lang' => [
                    'en' => 'bold-b.svg',
                    'ar,de' => 'bold-f.svg',
                ]
            ],
        ]
    ];

    public static $commonImageVariants = [
        'invert' => [
            'color' => '#FFFFFF',
            'global' => true,
        ],
        'primary' => [
            'color' => '#598AD1',
        ],
        'constructive' => [
            'color' => '#00C697',
        ],
        'destructive' => [
            'color' => '#E81915',
        ],
    ];

    public static function providerGetModules()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider providerGetModules
     * @covers ResourceLoaderImageModule::getStyles
     */
    public function testGetStyles($module, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ResourceLoaderContext::getImageObj
     */
    public function testContext()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  var_dump(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

class ResourceLoaderImageModuleTestable extends ResourceLoaderImageModule
{
    /**
     * Replace with a stub to make test cases easier to write.
     */
    protected function getCssDeclarations($primary, $fallback)
    {
        return [ '...' ];
    }
}
