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
    return (new App\Controllers\PostController())->listPost();
});


//định nghĩa đường dẫn trỏ đến Product Controller
$router->get('list', [App\Controllers\PostController::class, 'listPost']);
$router->get('addPost', [App\Controllers\PostController::class, 'addPost']);
$router->post('add', [App\Controllers\PostController::class, 'add']);
$router->get('viewUpdate', [App\Controllers\PostController::class, 'viewUpdate']);
$router->post('editPost', [App\Controllers\PostController::class, 'editPost']);
$router->get('delete', [App\Controllers\PostController::class, 'delete']);



# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;

