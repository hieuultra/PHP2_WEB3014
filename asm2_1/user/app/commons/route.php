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
//định nghĩa đường dẫn trỏ đến user Controller
// $router->get('#navbar-vertical', [App\Controllers\UserController::class, 'listCat']);
$router->get('signUp', [App\Controllers\UserController::class, 'signUp']);
$router->post('signUpp', [App\Controllers\UserController::class, 'signUpp']);
$router->get('login', [App\Controllers\UserController::class, 'login']);
$router->post('checkLogin', [App\Controllers\UserController::class, 'checkLogin']);
$router->get('loginSuccess', [App\Controllers\UserController::class, 'loginSuccess']);
$router->get('account', [App\Controllers\UserController::class, 'account']);
$router->get('logOut', [App\Controllers\UserController::class, 'logOut']);
$router->get('viewForgotPassword', [App\Controllers\UserController::class, 'viewForgotPassword']);
$router->post('forgotPassword', [App\Controllers\UserController::class, 'forgotPassword']);
$router->get('viewEditAcc', [App\Controllers\UserController::class, 'viewEditAcc']);
$router->post('editAcc', [App\Controllers\UserController::class, 'editAcc']);
$router->get('pro_detail', [App\Controllers\UserController::class, 'pro_detail']);
$router->post('search_pro', [App\Controllers\UserController::class, 'search_pro']);
$router->get('product_cat', [App\Controllers\UserController::class, 'product_cat']);
$router->get('viewCart', [App\Controllers\UserController::class, 'viewCart']);



# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;
