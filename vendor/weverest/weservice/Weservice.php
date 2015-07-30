<?php
namespace Weverest\Weservice;
use Weverest\Weservice\Collection;

/**
 * Class Weservice
 * @package Weverest\Weservice
 */
class Weservice{

    /**
     * @var Collection\Service $collection;
     */
    private $collection;

    public function __construct(){
        $this->collection = new Collection\Service();
        //Set environment level
        $this->environment('development');
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
        $this->collection->append($service);
    }

    public function run(){
        $run = new Run();
        $run->init($this->collection);
    }

}