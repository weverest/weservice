<?php
namespace Weverest\Weservice;
use Weverest\Weservice\Exception\RunException;

/**
 * class Config
 * @package Weverest\Weservice
 */
class Config{

    private $path;
    private $config;

    public function __construct($path){
        $this->path = $path;
        $this->config = $this->setConfig();
        return $this;
    }

    /**
     * @return array
     * @throws RunException
     */
    public function setConfig(){
        if(file_exists($this->path)) {
            $data = include($this->path);

            if(is_array($data))
                return $data;
        }
        throw new RunException('Filed to load '.$this->path);
    }

    /**
     * @return array
     */
    public function getConfig(){
        return $this->config;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function getAttribute($name){
        if(isset($this->config[$name]))
            return $this->config[$name];
        return null;
    }
}