<?php

namespace App\controllers;

session_start();

use App\Models\Account;
use App\Models\Category;
use App\Models\Product;

class UserController
{

    function userIndex()
    {
        $obj = new Category();
        $listC = $obj->getAllCategory();
        $obj1 = new Product();
        $listP = $obj1->getAllProduct();
        require_once './app/views/index.php';
    }
    function detailPro()
    {
        require_once './app/views/detailPro/detail.php';
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
    function login()
    {
        require_once './app/views/login/login.php';
    }
    function checkLogin()
    {
        if (isset($_POST['login'])) {
            $acc = new Account();
            $result = $acc->check_user($_POST['username'], $_POST['password']);
            if (is_array($result)) {
                $_SESSION['auth'] = $result;
                echo '<script>alert("Login success!")</script>';
                echo "<script>window.location.href='loginSuccess';</script>";
            } else {
                echo '<script>alert("Username or password is wrong!")</script>';
                echo "<script>window.location.href='login';</script>";
            }
        }
    }
    function loginSuccess()
    {
        require_once './app/views/login/login_sucsess.php';
    }
    function account()
    {
        require_once './app/views/account/account.php';
    }
    function logOut()
    {
        session_unset();
        echo "<script>window.location.href='login';</script>";
    }
    function viewForgotPassword()
    {
        require_once './app/views/forgotPassword/forgot-password.php';
    }
    function forgotPassword()
    {
        if (isset($_POST['send_email'])) {
            $acc = new Account();
            $result = $acc->check_email($_POST['email']);
            if (is_array($result)) {
                $tbao = "Your password is:" . $result['password'];
                echo "<script>alert('$tbao');</script>";
                echo "<script>window.location.href='viewForgotPassword';</script>";
            } else {
                $tbao = "Email undefind!";
                echo "<script>alert('$tbao');</script>";
                echo "<script>window.location.href='viewForgotPassword';</script>";
            }
        }
    }
    function viewEditAcc()
    {
        require_once './app/views/account/edit_account.php';
    }
    function editAcc()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if (isset($_POST['edit'])) {
            $acc = new Account();
            $result = $acc->edit_account(
                $id,
                $_POST['username'],
                $_POST['password'],
                $_POST['email'],
                $_POST['address'],
                $_POST['phone'],
                $_FILES['img']
            );
            $acc = new Account();
            $_SESSION['auth'] = $acc->check_user($_POST['username'], $_POST['password']); // sau khi edit xong thi edit lai $_SESSION['user'] moi
            echo "<script>alert('Edit success!');</script>";
            echo "<script>window.location.href='viewEditAcc';</script>";
        }
    }
}
