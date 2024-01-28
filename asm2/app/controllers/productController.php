<?php

namespace App\controllers;

use App\models\Product;
use App\models\Category;

class ProductController
{
    function listPro()
    {
        $obj = new Product();
        $pro = $obj->getAllProduct();
        require_once 'app/views/admin/product/listPro.php';
    }
    function addPro()
    {
        $obj = new Category();
        $listCat = $obj->getAllCategory();
        require_once 'app/views/admin/product/addPro.php';
    }
    function addProduct()
    {
        $pro = new Product();
        $pro->insertPro($_POST['name'], $_FILES['img'], $_POST['description'], $_POST['price'], $_POST['discount'], $_POST['id_cat']);
        header("location:listPro");
    }
    function viewUpdatePro()
    {
        $obj = new Category();
        $listCat = $obj->getAllCategory();
        $id = $_GET['id'];
        $obj1 = new Product();
        $pro = $obj1->getPro($id);
        require_once 'app/views/admin/product/editPro.php';
    }
    function editPro()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $obj1 = new Product();
        $pro = $obj1->getPro($id);
        $check = $obj1->update($id, $_POST['name'], $_FILES['img'], $_POST['description'], $_POST['price'], $_POST['discount'], $_POST['id_cat']);
        if (!$check) {
            echo "<script>alert('cap nhap thanh cong')</script>";
            echo "<script>window.location.href='listPro';</script>";
        } else {
            echo "<script>alert('cap nhat that bai')</script>";
            echo "<script>window.location.href='listPro';</script>";
        }
    }
    function hard_delete_pro()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $obj = new Product();
        $obj->hard_delete_pro($id);
        echo '<script>alert("Xoa thành công")</script>';
        echo "<script>window.location.href='listPro';</script>";
    }
    function soft_delete_pro()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $obj = new Product();
        $obj->soft_delete_pro($id);
        echo '<script>alert("Xoa thành công")</script>';
        echo "<script>window.location.href='listPro';</script>";
    }
}
