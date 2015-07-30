<?php
namespace Weverest\Weservice\Request;
/**
 * Class Resolver
 * @package Weverest\Weservice\Request
 */
class Resolver{
    /**
     * Return webservice uri
     * @return string
     */
    public static function getUri(){
        return '/'. trim($_SERVER['REQUEST_URI'], '/') . '/';
    }

    /**
     * Return webservice url
     * @return string
     */
    public static function getUrl(){
        if(isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']))
            $protocol = 'https';
        else
            $protocol = 'http';

        return $protocol.'://'.$_SERVER['HTTP_HOST'] . self::getUri();
    }

    /**
     * Get the url base to separate the project folder from params
     * @return string
     */
    public static function getUrlBase(){
        return dirname($_SERVER['SCRIPT_NAME']) . '/';
    }

    /**
     * Parse url
     * @return array|mixed|null|string
     */
    public static function getParams(){
        $url_request = str_replace(self::getUrlBase(), '', self::getUri());
        if(!empty($url_request)){
            if(strpos($url_request, '/') === false)
                return $url_request;
            else {
                $url_request = trim($url_request, '/');
                return explode('/', $url_request);
            }
        }
        return null;
    }

    /**
     * @param $index
     * @return null|string
     */
    public static function getParam($index){
        $params = self::getParams();
        if(isset($params) && isset($params[$index]))
            return $params[$index];
        return false;
    }
}