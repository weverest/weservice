<?php
namespace Weverest\Weservice\Config;
/**
 * Class ServiceConfig
 * @package Weverest\Weservice\Config
 */
class ServiceConfig implements ConfigInterface{
    /**
     * @var string $file
     * @var string $serviceName
     */

    private $file = 'config/service.php';

    public function configFile($file){
        $this->file = $file;
    }

}