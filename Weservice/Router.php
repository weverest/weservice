<?php
namespace Weservice;
use Weservice\Request\Get;
/**
 * Class Router
 * @package Weservice
 */
class Router{
    public static function get(){
        return new Get();
    }
}