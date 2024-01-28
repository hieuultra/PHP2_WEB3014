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
// $router->get('/', function () {
//     return (new App\Controllers\UserController())->userIndex();
// });
// $router->get('/app/views/admin/', function () {
//     return (new App\Controllers\AdminController())->adminIndex();
// });
$router->get('/', function () {
    return (new App\Controllers\AdminController())->adminIndex();
});
//định nghĩa đường dẫn trỏ đến category Controller
$router->get('category/listCat', [App\Controllers\CategoryController::class, 'listCat']);
$router->get('category/addCat', [App\Controllers\CategoryController::class, 'addCat']);
$router->post('category/addCate', [App\Controllers\CategoryController::class, 'addCate']);
$router->post('category/addCategory', [App\Controllers\CategoryController::class, 'addCategory']);
$router->get('category/viewUpdateCat', [App\Controllers\CategoryController::class, 'viewUpdateCat']);
$router->post('category/editCat', [App\Controllers\CategoryController::class, 'editCat']);
$router->get('category/hard_delete_cat', [App\Controllers\CategoryController::class, 'hard_delete_cat']);
$router->get('category/soft_delete_cat', [App\Controllers\CategoryController::class, 'soft_delete_cat']);
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
