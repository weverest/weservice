<?php
namespace Weverest\Weservice;
use Weverest\Weservice\Database\Repository;

/**
 * Class Middleware
 */
class Middleware{
    /**
     * @var Service $service
     * @var Config $service
     * @var Filesystem $service
     */
    private $service;
    private $config;
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
        //Service Config
        $this->config['service'] = new Config($this->fs->getConfigPath() . 'service.php');
        $this->config['auth'] =  new Config($this->fs->getConfigPath() . 'authorization.php');
        $this->config['database'] =  new Config($this->fs->getConfigPath() . 'database.php');
//        $driver = $this->config['database']->getAttribute('default');
//        $host = $this->config['database']->getAttribute('connections')['host'];
//        $username = $this->config['database']->getAttribute('connections')['username'];
//        $password = $this->config['database']->getAttribute('connections')['password'];
//        $db = $this->config['database']->getAttribute('connections')['database'];

        $repository = new Repository('mysql:host=localhost;dbname=test', 'root', '');
    }

    private function setDbConnection(){

    }
}