<?php
namespace Weverest\Weservice;
use Weverest\Weservice\Exception\Run as RunException;
/**
 * Class Filesystem
 * @package Weverest\Run
 */
class Filesystem{
    /**
     * @var Service $service
     * @var \ReflectionClass $reflex
     * @var string $servicePath
     * @var string $config
     * @var string $repository
     * @var string $routes
     *
     */
    private $service;
    private $reflex;
    private $config = 'config';
    private $repository = 'repository';
    private $routes = 'routes';


    public function __construct(Service $service){
        $this->service = $service;
        $this->reflex = new \ReflectionClass($service);
    }

    /**
     * @param $configPath
     * @throws RunException
     */
    public function setConfigPath($configPath){
        if(is_dir($configPath))
            $this->config = $configPath;
        else
            throw new RunException('Config path not exist. ' . $configPath);
    }

    /**
     * @return string
     * @throws RunException
     */
    public function getConfigPath(){
        if(!is_dir($this->config)){
            $this->config = $this->getServicePath() . $this->config . DIRECTORY_SEPARATOR;
            if(!is_dir($this->config))
                throw new RunException('The directory '.$this->config . ' does not exist.');
        }

        return $this->config;
    }

    /**
     * @return string
     * @throws RunException
     */
    public function getRepositoryPath()
    {
        if(!is_dir($this->repository)){
            $this->config = $this->getServicePath() . $this->repository . DIRECTORY_SEPARATOR;
            if(!is_dir($this->repository))
                throw new RunException('The directory '.$this->repository . ' does not exist.');
        }
        return $this->repository;
    }

    /**
     * @param $repositoryPath
     * @throws RunException
     */
    public function setRepositoryPath($repositoryPath)
    {
        if(is_dir($repositoryPath))
            $this->repository = $repositoryPath;
        else
            throw new RunException('Repository path not exist. ' . $repositoryPath);
        $this->repository = $repositoryPath;
    }

    /**
     * @return string
     * @throws RunException
     */
    public function getRoutesPath()
    {
        if(!is_dir($this->routes)){
            $this->routes = $this->getServicePath() . $this->routes . DIRECTORY_SEPARATOR;
            if(!is_dir($this->routes))
                throw new RunException('The directory '.$this->routes . ' does not exist.');
        }
        return $this->routes;
    }

    /**
     * @param $routesPath
     * @throws RunException
     */
    public function setRoutesPath($routesPath)
    {
        if(is_dir($routesPath))
            $this->repository = $routesPath;
        else
            throw new RunException('Routes path not exist. ' . $routesPath);
        $this->routes = $routesPath;
    }

    /**
     * @return string
     */
    public function getServicePath(){
        return dirname($this->reflex->getFileName()) . DIRECTORY_SEPARATOR;
    }

}