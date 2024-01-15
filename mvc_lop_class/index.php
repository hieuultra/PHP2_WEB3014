<?php
//dieu huong cac method tu controller
require_once 'controller/productController.php';
$url = isset($_GET['url']) ? $_GET['url'] : "/";

switch ($url) {
    case '/':
        listProduct();
        break;
    case 'add-product':
        if (isset($_POST['save'])) {
            addProduct($_POST['name'], $_POST['price'], $_FILES['image'], $_POST['id_category']);
        }
        addPro();
        break;
    default:
        # code...
        break;
}
