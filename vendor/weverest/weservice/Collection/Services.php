<?php
namespace Weverest\Weservice\Collection;
use Weverest\Weservice\Service;
/**
 * Class Services
 * @package Weverest\Weservice
 */
class Services{
    /**
     * @var array $services
     * @var array $nameServices
     */
    private $services;
    private $serviceName;

    /**
     * @param Service $service
     */
    public function append(Service $service){
        $this->services[] = $service;
        $class_name = explode('\\', get_class($service));
        $this->serviceName[] = strtolower(end($class_name));
    }

    /**
     * Number of services registered
     * @return int
     */
    public function registered(){
        return count($this->serviceName);
    }

    /**
     * @param $serviceName
     * @return Service|bool
     */
    public function getService($serviceName){
        $service = array_search($serviceName, $this->serviceName);
        if($service !== false)
            return $this->services[$service];
        return false;
    }
}