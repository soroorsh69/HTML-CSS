<?php

namespace Php\Project\Services;

use Exception;
use  Php\Project\Controller\ControllerInterface;
use  Php\Project\Exception\MethodNotAllowed;
use Php\Project\Services\ServiceManager;


class RoutingService
{
  private array $routes = [];
  private ServiceManager $serviceManager;

  public function __construct(array $routes, ServiceManager $serviceManager)
  {
    $this->routes= $routes;
  }
  public function route(string $method, string $path, string $controllername): void
  {
    $this->routes[$method][$path] = $controllername;
  }

  public function resolve(string $method, string $path): ControllerInterface
  {


    if (!isset($this->routes[$method][$path])) {
      throw new MethodNotAllowed();
    }

    $controller = null;
    $controller=$this->serviceManager->get($this->routes[$method][$path]);
    var_dump($controller);die;
    //$controller = (new $this->routes[$method][$path])();



    if ($controller instanceof ControllerInterface) {
      return $controller;
    }
    throw new Exception('Controller is not child of controller Interface');
  }
}
