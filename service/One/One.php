<?php
namespace Service\One;
use Weverest\Weservice\Service;
use Weverest\Weservice\Config;

class One extends Service{

    public function __construct($config = null){
        if(isset($config) && $config instanceof Config)
            $this->setConfig($config);
    }

    public function hello(){
        echo 'Hello Service One';
    }

}