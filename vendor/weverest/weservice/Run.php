<?php
namespace Weverest\Weservice;
use Weverest\Weservice\Exception\RunException;
use Weverest\Weservice\Request\Resolver;

/**
 * Class Run
 * @package Weverest\Weservice
 */
class Run{

    public function init(Collection\Services $collection){
        //Get Service Name
        $serviceName = Resolver::getService();
        // Check registered services
        if($collection->registered() > 0){
            $serviceInstance = $collection->getService($serviceName);
            // If service exists
            if($serviceInstance) {
                $middleware = new Middleware($serviceInstance);
                $middleware->runService();
            }else
                throw new RunException('Service not found.', 404);
        } else
            throw new RunException('Web Service Unavailable.', 503);

    }


}