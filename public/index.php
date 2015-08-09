<?php
/*
|
| Register The Composer Auto Loader
|
*/
include __DIR__.'/../vendor/autoload.php';

$ws = new \Weverest\Weservice\Weservice();

$ws->register(new Service\One\One());
//$ws->register(new Service\Two\TwoService());
$ws->run();