<?php
/*
|
| Register The Composer Auto Loader
|
*/
include __DIR__.'/../vendor/autoload.php';

$ws = new \Weverest\Weservice\Weservice();
$ws->run();

