<?php
namespace Weservice\Request;
/**
 * Class Get
 * @package Weservice\Request
 */
class Get{
    public function register($route, $action){
        if(isset($_GET['route'])){
            if('demo/'.$route == $_GET['route']){
                preg_match_all('/^(\w*)(?:@)(\w*)$/', $action, $matches);
                $model = $matches[1][0];
                $method = $matches[2][0];
                $class = 'services\\demo\\'.$model;
                $model = new $class();
                $model->$method();
            }
            else
                die('404 - hehe');
        }

    }
}