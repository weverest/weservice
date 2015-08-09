<?php
namespace Weverest\Weservice;
use Weverest\Weservice\Collection;
use Weverest\Weservice\Exception\RunException;

/**
 * Class Weservice
 * @package Weverest\Weservice
 */
class Weservice{

    /**
     * @var Collection\Services $collection;
     */
    private $collection;

    public function __construct(){
        $this->collection = new Collection\Services();
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

    /**
     * Execute Weservice
     * @return void
     */
    public function run(){
        $run = new Run();
        try {
            $run->init($this->collection);
        } catch(RunException $e) {
            Error::show($e->getMessage());
        }
    }
}