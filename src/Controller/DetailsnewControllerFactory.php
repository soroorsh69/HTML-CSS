<?php

namespace Php\Project\Controller;
use Php\Project\Services\DB;
use Php\Project\Interfaces\FactoryInterfaces;
use Php\Project\Services\ServiceManager;




class DetailsnewControllerFactory implements FactoryInterfaces {
    
    public function __invoke(ServiceManager $serviceManager):DetailsnewController
    {
        return new DetailsnewController(new DB());
                

    }
}