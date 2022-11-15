<?php

namespace Php\Project\Interfaces;

use Php\Project\Services\ServiceManager;

interface FactoryInterfaces{

public function __invoke(ServiceManager $serviceManager);

}