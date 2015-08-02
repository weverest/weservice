<?php
namespace Weverest\Weservice\Database;
/**
 * Class Repository
 * @package Weverest\Weservice\Database
 */
class Repository extends \PDO{

    public function __construct($dsn, $user, $password){
        parent::__construct($dsn, $user, $password);
    }

    public static function db(){
        return self;
    }

    /**
     * @param $name
     * @param $arguments
     * @return Repository
     */
    public static function __callStatic($name, $arguments)
    {
        return self::$name($arguments);
    }
}