<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();


//bắt đầu định nghĩa ra các đường dẫn
$router->get('/', function () {
    return (new App\controllers\PhanHoiController())->list();
});

$router->get('list', [App\controllers\PhanHoiController::class, "list"]);
$router->get('viewAdd', [App\controllers\PhanHoiController::class, "viewAdd"]);
$router->post('add', [App\controllers\PhanHoiController::class, "add"]);
$router->get('getById/{id}', [App\controllers\PhanHoiController::class, "getById"]);
$router->post('update/{id}', [App\controllers\PhanHoiController::class, "update"]);
$router->get('delete/{id}', [App\controllers\PhanHoiController::class, "delete"]);


# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;
