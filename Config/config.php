<?php

use Php\Project\Controller\DetailsnewController;
use Php\Project\Controller\DetailsnewControllerFactory;
use Php\Project\Controller\HomepageController;
use Php\Project\Controller\HomepageControllerFactory;
use Php\Project\Services\RoutingService;
use Php\Project\Services\RoutingServiceFactory;
use Php\Project\Services\TemplateRenderService;

return [

    'template' => [
        'path' => 'template/'
    ],

    'invokable'=>[
        TemplateRenderService::class =>TemplateRenderService::class,
    ],

    'factory' => [
        HomepageController::class => HomepageControllerFactory::class,
        DetailsnewController::class=>DetailsnewControllerFactory::class,
        RoutingService::class => RoutingServiceFactory::class,
        
    ],

    'routing'=>[

        'GET'=>[
            '/'=>HomepageController::class,
            'details/project/'=>DetailsnewController::class,
        ]
    ]

];
