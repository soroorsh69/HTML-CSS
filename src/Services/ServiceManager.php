<?php

namespace Php\Project\Services;

use Php\Project\Exception\ServiceNotFound;
use Php\Project\Interfaces\FactoryInterfaces;

class ServiceManager
{

    private array $config;
    public function __construct(array $config)
    {
        $this->config = $config;
    }
    public function get(string $serviceName)
    {
if ($serviceName ==='config'){
    return $this->config;
}



        $factories = $this->config['factory'] ?? [];
        $output = $factories[$serviceName] ?? null;
   
        if ($output === null) {
            throw new ServiceNotFound();
        }

        $final=new $output();

    if ($final instanceof FactoryInterfaces){
        return $final($this);
        
    }
    throw new ServiceNotFound();
    }
}
