<?php
namespace Weverest\Weservice;

/**
 * Class Run
 * @package Weverest\Weservice
 */
class Run{

    public function init(Collection\Service $collection){
        $service = new Request\Service();
        //Get Service Name
        $serviceName = $service->getService();
        // Check registered services
        if($collection->registered() > 0){
            $serviceInstance = $collection->getService($serviceName);
            if($serviceInstance) {

            }else
                throw new \Weverest\Weservice\Exception\Run('Service not found.', 404);
        } else
            throw new \Weverest\Weservice\Exception\Run('Web Service Unavailable.', 503);

    }
}