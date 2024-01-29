<?php

namespace App\controllers;

use App\models\Product;
use eftec\bladeone\BladeOne;

class ProductController
{
    public $view;
    function __construct()
    {
        $view = "app/views";
        $cache = "app/cache";
        $this->view = new BladeOne($view, $cache, BladeOne::MODE_AUTO);
    }
    function listProduct()
    {
        $obj = new Product();
        $product = $obj->getProduct();
        //var_dump($product);
        // require_once 'app/views/product/list.php';
        return $this->view->run('product.show', ['pro' => $product]);
    }
    function addProduct()
    {
        return $this->view->run('product.add');
        // require_once 'app/views/product/add.php';
    }
    function add()
    {
        // if (isset($_POST['add'])) {
        // echo $_POST['name'];
        // echo $_POST['price'];
        // echo $_POST['quantity'];
        $pro = new Product();
        $pro->add($_POST['name'], $_POST['price'], $_POST['quantity']);
        header("location: index.php");
        // }
    }
    function viewUpdate()
    {
        $id = $_GET['id'];
        $obj1 = new Product();
        $pro = $obj1->getPro($id);
        return $this->view->run('product.update', ['pr' => $pro]);
    }
    function editPro()
    {
        $id = $_GET['id'];
        $obj1 = new Product();
        $pro = $obj1->getPro($id);
        $check = $obj1->update($id, $_POST['name'], $_POST['price'], $_POST['quantity']);
        if (!$check) {
            echo "<script>alert('cap nhap thanh cong')</script>";
            echo "<script>window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('cap nhat that bai')</script>";
            echo "<script>window.location.href='index.php';</script>";
        }
    }
    function delete()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $obj = new Product();
        $obj->delete($id);
        echo '<script>alert("Xoa thành công")</script>';
        echo "<script>window.location.href='index.php';</script>";
    }
}
