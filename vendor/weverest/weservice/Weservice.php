<?php
namespace Weverest\Weservice;
use Service\One\OneService;
use Weverest\Weservice\Collection;

/**
 * Class Weservice
 * @package Weverest\Weservice
 */
class Weservice{

    /**
     * @var array $register;
     * @var Service $collection;
     */
    private $register;
    private $collection;

    public function __construct(){
        $this->collection = new Service();
        //Set environment level
        //$this->environment('development');
    }

    /**
     * @param string $environment
     * @example
     * environment levels
     *  - development
     *  - test
     *  - production
     */
    public function environment($environment){
        switch($environment){
            case 'development':
                ini_set('display_errors', 'On');
                error_reporting(-1);
                break;
            case 'test':
                ini_set('display_errors', 'On');
                error_reporting(-1);
                break;
            case 'production':
                ini_set('display_errors', 'Off');
                error_reporting(0);
                break;
            default:
                ini_set('display_errors', 'On');
                error_reporting(-1);
        }
    }

    /**
     * @param Service $service
     */
    public function register(Service $service){
        $this->register[] = $service;
    }

    public function run(){
        $run = new Run();
        $run->init();
    }

}