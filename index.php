<?php   
ini_set('display_errors', 1);

require 'vendor/autoload.php';
require 'config/constants.php';

@session_start();

include_once 'config/urls.php';

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];	

if(REDIRECT_LOGIN){

    if(!isset($_SESSION['userdata'])){
        
        if($uri != '/login'){
            header("location:/login");
        }

    }

}
// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        echo '404';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        echo '405';
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        call_user_func($handler,$vars);
        // echo $handler($vars);
       
        break;

}

?> 


