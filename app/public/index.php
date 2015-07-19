<?php
include "bootstrap.php";
/**
 * Weservice
 */
use services\demo\Demo;
$service = new \Weservice\Weservice();
$service->addService(new Demo());
$service->start();