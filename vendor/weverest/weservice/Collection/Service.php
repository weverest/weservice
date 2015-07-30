<?php
namespace Weverest\Weservice\Collection;
/**
 * Class ServiceCollection
 * @package Weverest\Weservice
 */
class Service{
    /**
     * @var array $services
     */
    private $services;

    /**
     * @param Service $service
     */
    public function append(Service $service){
        $this->services[] = $service;
    }
}