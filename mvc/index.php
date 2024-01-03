<?php
session_start(); //toan bo project deu sd session_start o day
// tôi muốn: "tất cả các request tới thư mục mvc phải bắt buộc đi qua file index.php"
// thu thập các url gửi lên project
$url = isset($_GET['url']) ? $_GET['url'] : "/";
require_once './vendor/autoload.php';
require_once './commons/database-config.php';

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\CategoryController;

//routing
switch ($url) {
    case '/':
        $ctr = new HomeController();
        $ctr->index();
        break;
    case 'detail':
        $ctr = new HomeController();
        $ctr->detail();
        break;
    case 'insert-cate':
        $ctr = new CategoryController();
        $ctr->addData();
        break;
    case 'update-cate':
        $ctr = new CategoryController();
        $ctr->editData();
        break;
    case 'delete-cate':
        $ctr = new CategoryController();
        $ctr->delete();
        break;
    case 'contact':
        $ctr = new HomeController();
        $ctr->contact();
        break;
    case 'add-product':
        $ctr = new ProductController();
        $ctr->addForm();
        break;
    case 'save-add-product':
        $ctr = new ProductController();
        $ctr->saveAdd();
        break;
    case 'list-cate':
        $ctr = new CategoryController();
        $ctr->index();
        break;

    default:
        echo "no exsist";
        break;
}
