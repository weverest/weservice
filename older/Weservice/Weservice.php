<?php
namespace Weservice;
/**
 * Class Weservice
 * @package Weservice
 */
class Weservice{
    public function start(){
        //echo 'Up';
    }

    public function addService(Service $service){
        $rf = new \ReflectionClass($service);
        $dir = dirname($rf->getFileName());
        $router = $dir . DIRECTORY_SEPARATOR . 'Route.php';
        if(file_exists($router))
            include $router;
    }
}