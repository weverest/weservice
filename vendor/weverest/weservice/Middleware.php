<?php
namespace Weverest\Weservice;
use Weverest\Weservice\Config\AuthorizationConfig;
use Weverest\Weservice\Config\DatabaseConfig;
use Weverest\Weservice\Config\Parse;
use Weverest\Weservice\Config\ServiceConfig;
use Weverest\Weservice\Database\Repository;

/**
 * Class Middleware
 */
class Middleware{
    /**
     * @var Service $service
     * @var ServiceConfig $serviceConfig
     * @var DatabaseConfig $databaseConfig
     * @var AuthorizationConfig $authorizationConfig
     * @var Filesystem $service
     */
    private $service;
    private $serviceConfig;
    private $databaseConfig;
    private $authorizationConfig;
    private $fs;

    /**
     * @param Service $service
     */
    public function __construct(Service $service){
        $this->service = $service;
        $this->fs = new Filesystem($service);
    }

    public function runService(){
        $this->setServiceConfig();
    }

    private function setServiceConfig(){
       
    }

}