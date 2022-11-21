<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$configuration = include __DIR__ . "/../Config/config.php";
include __DIR__ . "/../vendor/autoload.php";


use Php\Project\Services\RoutingService;
use Php\Project\Services\ServiceManager;

$path = ($_GET['path'])  ?? '/';

$serviceManager = new ServiceManager($configuration);
$routingservice = $serviceManager->get(RoutingService::class);

//$routingservice->route('GET', '/', HomepageControllerFactory::class);
//$routingservice->route('GET', 'details/project/', DetailsnewControllerFactory::class);
try {

    $controller = $routingservice->resolve($_SERVER['REQUEST_METHOD'], $path);
}
/*catch(MethodNotAllowed $exception ){
    http_response_code(405);
    echo 'method not allowed';
    die;

}*/ catch (Exception $exception) {
    http_response_code(404);
echo $exception->getMessage();
    echo 'route not found';
    die;
}

echo $controller->getResponse();


/*$controller=null;
 switch($path){
    case '': 
     $controller=new HomepageController();
   
        break;

 

    case 'details/project/':
     $controller= new DetailsnewController();
        break;


} 

if($controller===null)
{
    echo '404 not foud';
    die;

}


if($controller instanceof ControllerInterface){
   echo  $controller->getResponse();

}
else{
    echo '404 not found';
    die;
}*/