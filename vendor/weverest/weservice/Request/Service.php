<?php
namespace Weverest\Weservice\Request;
/**
 * Class Service
 * @package Weverest\Weservice\Service
 */
class Service{
    public function getService(){
        return Resolver::getParam(0);
    }
}