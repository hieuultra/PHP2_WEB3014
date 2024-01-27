<?php

namespace App\controllers;

use App\models\Category;

class CategoryController
{
    function listCat()
    {
        $obj = new Category();
        $product = $obj->getAllCategory();
        require_once 'app/views/admin/category/listCat.php';
    }
    function addCat()
    {
        require_once 'app/views/admin/category/addCat.php';
    }
    // function add()
    // {
    //     // if (isset($_POST['add'])) {
    //     // echo $_POST['name'];
    //     // echo $_POST['price'];
    //     // echo $_POST['quantity'];
    //     $pro = new Category();
    //     $pro->add($_POST['name'], $_POST['price'], $_POST['quantity']);
    //     header("location: index.php");
    //     // }
    // }
}
