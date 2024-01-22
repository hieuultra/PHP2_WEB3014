<?php

namespace App\controllers;

use App\models\Product;

class ProductController
{
    function listProduct()
    {
        $obj = new Product();
        $product = $obj->getProduct();
        //var_dump($product);
        require_once 'app/views/product/list.php';
    }
    function addProduct()
    {
        require_once 'app/views/product/add.php';
    }
}
