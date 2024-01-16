<?php
require_once 'controllers/productController.php';
// điều hướng các phương thức từ controller

$url = isset($_GET['url']) ? $_GET['url'] : "/";
$controler = new ProductController();
switch ($url) {
    case '/':

        $controler->listProduct();
        break;
    case 'addProduct':
        if (isset($_POST['add'])) {
            echo $_POST['name'];
            echo $_POST['price'];
            echo $_POST['quantity'];
            $pro = new Product();
            $pro->add($_POST['name'], $_POST['price'], $_POST['quantity']);
            header("location: index.php");
        }

        $controler->addProduct();
        break;
}
