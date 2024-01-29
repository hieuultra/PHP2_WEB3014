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

//duong dan admin
$router->get('/admin', function () {
    return (new App\Controllers\AdminController())->adminIndex();
});
//định nghĩa đường dẫn trỏ đến category Controller
$router->get('admin/category/listCat', [App\Controllers\CategoryController::class, 'listCat']);
$router->get('admin/category/addCat', [App\Controllers\CategoryController::class, 'addCat']);
$router->post('admin/category/addCategory', [App\Controllers\CategoryController::class, 'addCategory']);
$router->get('admin/category/viewUpdateCat', [App\Controllers\CategoryController::class, 'viewUpdateCat']);
$router->post('admin/category/editCat', [App\Controllers\CategoryController::class, 'editCat']);
$router->get('admin/category/hard_delete_cat', [App\Controllers\CategoryController::class, 'hard_delete_cat']);
$router->get('admin/category/soft_delete_cat', [App\Controllers\CategoryController::class, 'soft_delete_cat']);
//định nghĩa đường dẫn trỏ đến Product Controller
$router->get('admin/category/listPro', [App\Controllers\ProductController::class, 'listPro']);
$router->get('admin/category/addPro', [App\Controllers\ProductController::class, 'addPro']);
$router->post('admin/category/addProduct', [App\Controllers\ProductController::class, 'addProduct']);
$router->get('admin/category/viewUpdatePro', [App\Controllers\ProductController::class, 'viewUpdatePro']);
$router->post('admin/category/editPro', [App\Controllers\ProductController::class, 'editPro']);
$router->get('admin/category/hard_delete_pro', [App\Controllers\ProductController::class, 'hard_delete_pro']);
$router->get('admin/category/soft_delete_pro', [App\Controllers\ProductController::class, 'soft_delete_pro']);



# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;
