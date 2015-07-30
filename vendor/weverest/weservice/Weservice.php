<?php
namespace Weverest\Weservice;

class Weservice{

    public function register(Service $service){

    }

    public function run(){
        echo $_SERVER['SCRIPT_NAME'];
    }
}