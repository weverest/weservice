<?php
namespace Weverest\Weservice;
use Weverest\Weservice\Config\AuthorizationConfig;
use Weverest\Weservice\Config\DatabaseConfig;
use Weverest\Weservice\Config\ServiceConfig;

/**
 * Class Config
 * @package Weverest\Weservice
 */
class Config{

    /**
     * @return ServiceConfig
     */
    public function service(){
        return new ServiceConfig();
    }

    /**
     * @return DatabaseConfig
     */
    public function database(){
        return new DatabaseConfig();
    }

    /**
     * @return AuthorizationConfig
     */
    public function authorization(){
        return new AuthorizationConfig();
    }

    /**
     * @return ServiceConfig
     */
    public static function newConfig(){
        return new ServiceConfig();
    }

}