    <?php
    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include_once '../config.php';
    require_once '../vendor/autoload.php';
    $route = $_GET['route'] ?? '/';
    use Phroute\Phroute\RouteCollector;
    $router = new RouteCollector();
    $router->get('/', function(){

        return'/';
    });
    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);
 
    echo $response ;
    
    
    
    
  