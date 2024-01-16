<?php 
    require_once 'models/product.php';
    class ProductController{
        function listProduct(){
            $obj = new Product();
            $product = $obj->getProduct();
            //var_dump($product);
            require_once 'views/product/list.php';
        }
        function addProduct(){
            require_once 'views/product/add.php';
        }
    }
    
?>