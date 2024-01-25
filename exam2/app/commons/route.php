<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function () {
    if (!isset($_SESSION['auth']) || empty($_SESSION['auth'])) {
        header('location: ' . BASE_URL . 'login');
        die;
    }
});


// bắt đầu định nghĩa ra các đường dẫn
$router->get('/', function () {
    return (new App\Controllers\ProductController())->listProduct();
});


//định nghĩa đường dẫn trỏ đến Product Controller
$router->get('list', [App\Controllers\ProductController::class, 'listProduct']);
$router->get('addProduct', [App\Controllers\ProductController::class, 'addProduct']);
$router->post('add', [App\Controllers\ProductController::class, 'add']);
$router->get('viewUpdate', [App\Controllers\ProductController::class, 'viewUpdate']);
$router->post('editPro', [App\Controllers\ProductController::class, 'editPro']);
$router->get('delete', [App\Controllers\ProductController::class, 'delete']);



# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;

