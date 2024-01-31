<?php

namespace App\controllers;

use App\Models\Account;
use App\Models\Category;

class UserController
{
    function userIndex()
    {
        require_once './app/views/index.php';
    }
    function listCat()
    {
        $obj = new Category();
        $listCat = $obj->getAllCategory();
        require_once 'app/views/index.php';
    }
    function login()
    {
        require_once './app/views/login/login.php';
    }
    function signUp()
    {
        require_once './app/views/signUp/pages-sign-up.php';
    }
    function sign_Up($username, $password, $email,  $address, $phone,  $img)
    {
        // Khai báo mảng $error chứa lỗi trả về 
        $error = [];

        // Validate sản phẩm $name 
        if (empty(trim($username))) {
            $error['name']['required'] = 'Không được bỏ trống tên Cat';
        } else {
            if (strlen(trim($username)) < 5) {
                $error['name']['length'] = 'Tên Cat phải có ít nhất 3 ký tự';
            }
        }
        // Validate ảnh sản phẩm $image
        if (empty($img['name'])) {
            $error['img']['required'] = 'Không được bỏ trống ảnh';
        } else {
            $allowedFormats = ['jpg', 'jpeg', 'png']; // Thêm các định dạng ảnh hỗ trợ
            $maxFileSize = 5 * 1024 * 1024; // 5MB

            $imageInfo = getimagesize($img['tmp_name']);

            if (!$imageInfo || !in_array(strtolower(pathinfo($img['name'], PATHINFO_EXTENSION)), $allowedFormats)) {
                $error['img']['format'] = 'Ảnh  phải là định dạng (jpg, jpeg, png)';
            } elseif ($img['size'] > $maxFileSize) {
                $error['img']['size'] = 'Ảnh không được nặng hơn 5MB';
            }
        }
        // Kiểm tra nếu có lỗi
        if (!empty($error)) {
            // Xử lý lỗi theo ý bạn, có thể trả về mảng $error để hiển thị thông báo lỗi cho người dùng
            $_SESSION['error_messages'] = $error;
        } else {
            $targetDir = "./app/public/image/";
            $targetFile = $targetDir . $img['name'];
            if (move_uploaded_file($img['tmp_name'], $targetFile)) {
                $imgUrl = $targetFile;
                $acc = new Account();
                $acc->sign_Up($username, $password, $email,  $address, $phone,  $imgUrl);
            }
        }
    }
    function signUpp()
    {
        if (isset($_POST['signUp']) && $_POST['username'] != "" && $_POST['password'] != '') {
            $this->sign_Up($_POST['username'], $_POST['password'], $_POST['email'], $_POST['address'], $_POST['phone'],  $_FILES['img']);
            echo '<script>alert("Create account successly!")</script>';
            echo "<script>window.location.href='signUp';</script>";
        } else {
            echo '<script>alert("Please enter full input!")</script>';
            echo "<script>window.location.href='signUp';</script>";
        }
    }
}