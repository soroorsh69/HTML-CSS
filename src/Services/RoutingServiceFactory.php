<?php

namespace Php\Project\Services;

use Php\Project\Interfaces\FactoryInterfaces;
use Php\Project\Services\ServiceManager;

class RoutingServiceFactory implements FactoryInterfaces
{
   
    public function __invoke(ServiceManager $serviceManager): RoutingService


    {


       return new RoutingService($serviceManager->get('config')['routing'], $serviceManager) ;
    }
}
