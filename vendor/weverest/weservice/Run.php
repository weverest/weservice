<?php
namespace Weverest\Weservice;
use Weverest\Weservice\Request\Service as RService;

/**
 * Class Run
 * @package Weverest\Weservice
 */
class Run{
    public function init(){
        $serivce = RService::getService();
        var_dump($serivce);
    }
}