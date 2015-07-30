<?php
namespace Service\One;
use Weverest\Weservice\Service;

class OneService extends Service{

    public function __construct(){
        $this->setServiceName('one');
    }

    public function hello(){
        echo 'Hello Service One';
    }

}