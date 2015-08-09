<?php
namespace Weverest\Weservice\Config;
use Weverest\Weservice\Exception\RunException;

/**
 * class Parse
 * @package Weverest\Weservice
 */
class Parse{

    private $path;
    private $config;

    /**
     * @param $path
     * @return $this
     * @throws RunException
     */
    private function setConfig($path){
        $this->path = $path;
        if(file_exists($this->path)) {
            $config = include($this->path);

            if(is_array($config))
                $this->config = $config;

            return $this;
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