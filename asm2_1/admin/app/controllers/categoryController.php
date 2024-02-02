<?php

namespace App\controllers;

use App\models\Category;

class CategoryController
{
    function listCat()
    {
        $obj = new Category();
        $cat = $obj->getAllCategory();
        require_once './app/views/category/listCat.php';
    }
    function addCat()
    {
        require_once './app/views/category/addCat.php';
    }
    function addCate($name, $img)
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
            // } else {
            //     $imgName = $_FILES['img']['name'];
            //     $target_dir = "./app/public/image/";
            //     $target_file = $target_dir . basename($imgName);
            //     if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
            //         $cat = new Category();
            //         $cat->insertCat($name, $imgName);
            //     } else {
            //         // Xử lý lỗi, có thể lưu trong $_SESSION hoặc ghi log
            //         $_SESSION['error_messages'][] = 'Xin lỗi, đã có lỗi khi tải lên tập tin của bạn.';
            //     }
        } else {
            $targetDir = "./app/public/image/";
            $targetFile = $targetDir . $img['name'];
            if (move_uploaded_file($img['tmp_name'], $targetFile)) {
                $imgUrl = $targetFile;
                $cat = new Category();
                $cat->insertCat($name, $imgUrl);
            }
        }
    }

    function addCategory()
    {
        if (isset($_POST['addCategory']))
            $this->addCate($_POST['name'], $_FILES['img']);
        echo "<script>alert('Insert thanh cong')</script>";
        echo "<script>window.location.href='listCat';</script>";
    }
    function viewUpdateCat()
    {
        $id = $_GET['id'];
        $obj1 = new Category();
        $cat = $obj1->getCat($id);
        require_once './app/views/category/editCat.php';
    }
    function editCat()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $obj1 = new Category();
        $cat = $obj1->getCat($id);
        $check = $obj1->update($id, $_POST['name']);
        if (!$check) {
            echo "<script>alert('cap nhap thanh cong')</script>";
            echo "<script>window.location.href='listCat';</script>";
        } else {
            echo "<script>alert('cap nhat that bai')</script>";
            echo "<script>window.location.href='listCat';</script>";
        }
    }
    function hard_delete_cat()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $obj = new Category();
        $obj->hard_delete_cat($id);
        echo '<script>alert("Xoa thành công")</script>';
        echo "<script>window.location.href='listCat';</script>";
    }
    function soft_delete_cat()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $obj = new Category();
        $obj->soft_delete_cat($id);
        echo '<script>alert("Xoa thành công")</script>';
        echo "<script>window.location.href='listCat';</script>";
    }
}
