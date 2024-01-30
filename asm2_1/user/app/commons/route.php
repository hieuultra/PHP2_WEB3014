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
//duong dan user
$router->get('/', function () {
    return (new App\Controllers\UserController())->userIndex();
});
$router->get('listCat', function () {
    return (new App\Controllers\UserController())->listCat();
});
//định nghĩa đường dẫn trỏ đến category Controller
$router->get('admin/category/listCat', [App\Controllers\CategoryController::class, 'listCat']);
//định nghĩa đường dẫn trỏ đến Product Controller




# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;
