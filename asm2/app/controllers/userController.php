<?php

namespace App\controllers;

use App\Models\Category;

class UserController
{
    function userIndex()
    {
        require_once 'app/views/user/index.php';
    }
    function listCat()
    {
        $obj = new Category();
        $listCat = $obj->getAllCategory();
        require_once 'app/views/user/index.php';
    }
}
