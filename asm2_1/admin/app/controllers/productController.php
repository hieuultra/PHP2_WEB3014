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
        require_once 'app/views/product/listPro.php';
    }
    function addPro()
    {
        $obj = new Category();
        $listCat = $obj->getAllCategory();
        require_once 'app/views/product/addPro.php';
    }
    function addP($name, $img, $description, $price, $discount, $id_cat)
    {
        // Khai báo mảng $error chứa lỗi trả về 
        $error = [];

        // Validate sản phẩm $name 
        // if (empty(trim($name))) {
        //     $error['name']['required'] = 'Không được bỏ trống tên Cat';
        // } else {
        //     if (strlen(trim($name)) < 5) {
        //         $error['name']['length'] = 'Tên Cat phải có ít nhất 3 ký tự';
        //     }
        // }
        // Validate ảnh sản phẩm $image
        // if (empty($img['name'])) {
        //     $error['img']['required'] = 'Không được bỏ trống ảnh';
        // } else {
        //     $allowedFormats = ['jpg', 'jpeg', 'png']; // Thêm các định dạng ảnh hỗ trợ
        //     $maxFileSize = 5 * 1024 * 1024; // 5MB

        //     $imageInfo = getimagesize($img['tmp_name']);

        //     if (!$imageInfo || !in_array(strtolower(pathinfo($img['name'], PATHINFO_EXTENSION)), $allowedFormats)) {
        //         $error['img']['format'] = 'Ảnh  phải là định dạng (jpg, jpeg, png)';
        //     } elseif ($img['size'] > $maxFileSize) {
        //         $error['img']['size'] = 'Ảnh không được nặng hơn 5MB';
        //     }
        // }
        // Kiểm tra nếu có lỗi
        if (!empty($error)) {
            // Xử lý lỗi theo ý bạn, có thể trả về mảng $error để hiển thị thông báo lỗi cho người dùng
            $_SESSION['error_messages'] = $error;
        } else {
            $targetDir = "./app/public/image/";
            $targetFile = $targetDir . $img['name'];
            if (move_uploaded_file($img['tmp_name'], $targetFile)) {
                $imgUrl = $targetFile;
                $pro = new Product();
                $pro->insertPro($name, $imgUrl, $description, $price, $discount, $id_cat);
            }
        }
    }
    function addProduct()
    {
        if (isset($_POST['addProduct'])) {
            $this->addP($_POST['name'], $_FILES['img'], $_POST['description'], $_POST['price'], $_POST['discount'], $_POST['id_cat']);
            echo '<script>alert("Insert thành công")</script>';
            echo "<script>window.location.href='listPro';</script>";
        }
    }
    function viewUpdatePro()
    {
        $obj = new Category();
        $listCat = $obj->getAllCategory();
        $id = $_GET['id'];
        $obj1 = new Product();
        $pro = $obj1->getPro($id);
        require_once 'app/views/product/editPro.php';
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
