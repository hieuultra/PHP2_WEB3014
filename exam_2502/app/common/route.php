<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();


//bắt đầu định nghĩa ra các đường dẫn
$router->get('/', function () {
    return (new App\Controllers\SachController())->listSach();
});
$router->get('listSach', [App\Controllers\SachController::class, 'listSach']);
$router->get('viewAdd', [App\Controllers\SachController::class, 'viewAdd']);
$router->post('add', [App\Controllers\SachController::class, 'add']);
$router->get('getById/{id}', [App\Controllers\SachController::class, 'getById']);
$router->post('update/{id}', [App\Controllers\SachController::class, 'update']);
$router->get('delete/{id}', [App\Controllers\SachController::class, 'delete']);


# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;
