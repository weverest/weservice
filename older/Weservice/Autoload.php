<?php
namespace Weservice;
/**
 * Class Autoload
 * @package Weservice
 */
class Autoloader{
    /**
     * Slim PSR-0 autoloader
     * @param $className
     */
    public static function autoload($className){
        $class = str_replace(__NAMESPACE__ . '\\', '', $className);
        $baseDir = __DIR__ . DIRECTORY_SEPARATOR;
        $fileName = $baseDir . $class . '.php';

        if(file_exists($fileName))
            require $fileName;
    }

    /**
     * Register Slim's PSR-0 autoloader
     */
    public static function register(){
        spl_autoload_register(__NAMESPACE__ . "\\Autoloader::autoload");
    }
}