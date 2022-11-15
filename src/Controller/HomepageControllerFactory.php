<?php

namespace Php\Project\Controller;

use Php\Project\Interfaces\FactoryInterfaces;
use Php\Project\Services\TemplateRenderService;

use Php\Project\Services\DB;
use Php\Project\Services\ServiceManager;

class HomepageControllerFactory implements FactoryInterfaces
{

    public function __invoke(ServiceManager $serviceManager): HomepageController
    {
        return new HomepageController(
            new TemplateRenderService(),
            new DB()
        );
    }
}
