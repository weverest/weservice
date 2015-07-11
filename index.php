<?php
/**
 * Created by PhpStorm.
 * User: Diogo Brito
 * Date: 11/07/2015
 * Time: 19:38
 */

include_once 'vendor/autoload.php';


$config[''] = 'Parametro';

$Date = new \DateTime('now');

$app = new \Slim\Slim();

$app->get('/',function() use ($Date, $config){

    $array = ['config' =>$config,
              'date'=>$Date];

        echo json_encode($array);


});

$app->response->headers->set('Content-Type', 'application/json');

$app->run();
