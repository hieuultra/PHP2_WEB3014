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
}
