<?php
namespace Kernel;
use Bonwe\WebDriver\Remote\RemoteWebDriver;

/**
 * Created by PhpStorm.
 * User: bonwe
 * Date: 2019-03-19
 * Time: 13:55
 */

class CloseWebDriver{

    public static function doClose(RemoteWebDriver $driver)
    {
        if ( env('BROWSER_CLOSE_END',true) ){
            $driver->close();
        }
    }

}