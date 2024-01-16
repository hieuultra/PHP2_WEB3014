<?php 
    require_once 'models/product.php';

    function listProduct(){
        $product = getProduct();
        //var_dump($product);
        require_once 'views/product/list.php';
    }
    function addProduct(){
        require_once 'views/product/add.php';
    }
?>