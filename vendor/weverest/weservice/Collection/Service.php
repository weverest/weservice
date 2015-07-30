<?php
namespace Weverest\Weservice\Collection;
use Weverest\Weservice\Service as TheService;
use Weverest\Weservice\Weservice;

/**
 * Class ServiceCollection
 * @package Weverest\Weservice
 */
class Service{
    /**
     * @var array $services
     * @var array $nameServices
     */
    private $services;
    private $serviceName;

    /**
     * @param TheService $service
     */
    public function append(TheService $service){
        $this->services[] = $service;
        $name = $service->getServiceName();
        if(isset($name))
            $this->serviceName[] = $name;
        else
            $this->serviceName[] = get_class($service);
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