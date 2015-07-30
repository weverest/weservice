<?php
namespace Weverest\Weservice;
use Weverest\Weservice\Exception\Run;

/**
 * trait Config
 * @package Weverest\Weservice
 */
trait Config{
    /**
     * Load configuration file
     * @param $filePath
     * @return mixed
     * @throws Run
     */
    public function getConfig($filePath){
        if(file_exists($filePath)) {
            $data = include($filePath);

            if(is_array($data))
                return $data;
        }
        throw new Run('Filed to load '.$filePath);
    }
}