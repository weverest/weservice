<?php
namespace Weverest\Weservice;
/**
 * Class Service
 * @package Weverest\Weservice
 */
abstract class Service{
    /**
     * @var Config $config
     * @var Filesystem $fileSystem
     */
    private $config;

    /**
     * @param Config $config
     */
    protected function setConfig(Config $config){
        $this->config = $config;
    }

    /**
     * @return Config
     */
    public function getConfig(){
        if(!isset($this->config))
            $this->config = new Config();

        return $this->config;
    }
}