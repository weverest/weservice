<?php
namespace Weverest\Weservice;
/**
 * Class Error
 * @package Weverest\Weservice
 */
class Error{

    /**
     * @param $message
     * @param bool $return
     */
    public static function show($message, $return = false){
         $response = [
             'message' => $message,
             'status' => $return
         ];
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    /**
     * @param $code
     */
    public static function setHttpResponseCode($code){
        http_response_code($code);
    }
}