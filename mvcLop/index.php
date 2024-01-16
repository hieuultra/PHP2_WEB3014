<?php
require_once 'controllers/productController.php';
// điều hướng các phương thức từ controller

$url = isset($_GET['url']) == true ? $_GET['url'] : "/";

switch ($url) {
    case '/':
        listProduct();
        break;
    case 'addProduct':
        if (isset($_POST['add'])) {
            echo $_POST['name'];
            echo $_POST['price'];
            echo $_POST['quantity'];
            add($_POST['name'], $_POST['price'], $_POST['quantity']);
            header("location: index.php");
        }

        addProduct();
        break;
}
