<?php
require_once 'controllers/productController.php';
require_once 'controllers/categoryController.php';
// điều hướng các phương thức từ controller

$url = isset($_GET['url'])  ? $_GET['url'] : "/";

switch ($url) {
    case '/':
        // listProduct();
        listCategory();
        break;
    case 'addProduct':
        if (isset($_POST['add'])) {
            // echo $_POST['name'];
            // echo $_POST['price'];
            // echo $_POST['quantity'];
            add($_POST['name'], $_POST['price'], $_POST['quantity']);
            header("location: index.php");
        }
        addProduct();
        break;
    case 'add-cat':
        if (isset($_POST['save'])) {
            addCat($_POST['name']);
            echo '<script>alert("sucssely!!")</script>';
            echo '<script>window.location.href = "index.php";</script>';
        }
        addCategory();
        break;
    case 'edit-cat':
        if (isset($_POST['edit'])) {
            updateCat($_POST['name']);
            echo '<script>alert("Cap nhat sản phẩm thành công")</script>';
            echo '<script>window.location.href = "index.php";</script>';
        }
        viewEditCat();
        break;
    case 'hard-delete-cat':
        hardDeleteCat();
        break;
    case 'soft-delete-cat':
        softDeleteCat();
        break;
    default:

        break;
}
