<?php
/**
 * Atuloaders
 * Esses autoloader abaixo são apenas para testes
 * Futuramente serão carregados com o atuload do composer
 */
require "../vendor/autoload.php";
include '../../Weservice/Autoload.php';

//Simula autoload vendor do weservice
\Weservice\Autoloader::register();

//Autoload para o src
function simpleAutoload($class) {
    require '../src/' . $class . '.php';
}

spl_autoload_register('simpleAutoload');
