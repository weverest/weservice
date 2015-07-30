<?php
namespace Weverest\Weservice;
/**
 * Class Service
 * @package Weverest\Weservice
 */
class Service{
    /**
     * @var string $serviceName
     */
    private $serviceName;

    /**
     * @param $name
     */
    public function setServiceName($name){
        $this->serviceName = $name;
    }

    public function getServiceName(){
        return $this->serviceName;
    }
}