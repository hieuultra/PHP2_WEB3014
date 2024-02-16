<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

//bắt đầu định nghĩa ra các đường dẫn
$router->get('/', function(){
    return "trang chủ";
});

$router->get('list', [App\controllers\SachController::class, "getSach"]);

// add sách
$router->get('addSach', [App\controllers\SachController::class, "addSach"]);
$router->post('add', [App\controllers\SachController::class, "add"]);

// update
$router->get('getSachById/{id}', [App\controllers\SachController::class, "getById"]);
$router->post('update/{id}', [App\controllers\SachController::class, "update"]);

// delete
$router->get('delete/{id}', [App\controllers\SachController::class, "delete"]);


# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>