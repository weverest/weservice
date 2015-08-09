<?php
namespace Weverest\Weservice;
use Weverest\Weservice\Exception\RunException;
/**
 * Class Filesystem
 * @package Weverest\Run
 */
class Filesystem{

    /**
     * @var Service $service
     * @var \ReflectionClass $reflex
     */
    private $service;
    private $reflex;


    public function __construct(Service $service){
        $this->service = $service;
        $this->reflex = new \ReflectionClass($service);
    }

    /**
     * @return string
     */
    public function root(){
        return dirname($this->reflex->getFileName()) . DIRECTORY_SEPARATOR;
    }

}