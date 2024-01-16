<?php 
    require_once 'db.php';
    class Product extends DB{
        function getProduct(){
            $sql = "select * from product";
            return $this->getData($sql);
        }
    
        function add($name, $price, $quantity){
            $sql = "insert into product(name, price, quantity) 
            values('$name', '$price', '$quantity')";
            return $this->getData($sql, false);
        }
    }
   
?>