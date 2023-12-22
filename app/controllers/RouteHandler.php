<?php
session_start();

use App\routes\Router;

require __DIR__ . '/../../vendor/autoload.php';





$router = new Router();

$router->setRoutes([
    'GET' => [
        '' => ['HomeController', 'index'],
        'home' => ['HomeController', 'index'],
        'dashboard' => ['authController', 'redirectAdmin'],
        'login' => ['AuthController', 'redirectLogin'],
        'register' => ['AuthController', 'redirectRegister'],
        'logout' => ['AuthController', 'logout'],
        'displayUsers'=>['AuthController', 'redirectAdminToUser'],
        'dispalyBooks'=>['BookController','redirectAdminToBook'],
        'dispalyReservations'=>['BookController','redirectAdminToBook'],
        'reservation'=>['BookController','getBookById'],
        'search'=>['BookController','searchBook'],
        'filter'=>['BookController','redirectFilter'],
    ],
    'POST' => [
        'submitRegister' => ['AuthController', 'register'],
        'submitLogin' => ['AuthController', 'login'],
        'reserver'=>['BookController','reserveBook'],


    ],
]);



if (isset($_GET['url'])) {
    $uri = trim($_GET['url'], '/');
    $method = $_SERVER['REQUEST_METHOD'];

    try {
        $route = $router->getRoute($method, $uri);
       /*  var_dump($router->getRoute($method, $uri)) ; */

        if ($route) {
            list($controllerName, $methodName) = $route;
            $controllerClass = 'App\\controllers\\' . ucfirst($controllerName);
            $controller = new $controllerClass();

            if ($methodName) {
                if (method_exists($controller, $methodName)) {
                    $controller->$methodName();
                } else {
                    throw new Exception('Method not found in controller.');
                }
            } else {
                $controller->index();
            }
        } else {
            throw new Exception('Route not found.');
        }
    } catch (Exception $e) {
        // Log the exception or render a user-friendly error page
        echo 'Caught exception: ', $e->getMessage(), "\n";
        
    }
} else {
    echo 'noo';
}
