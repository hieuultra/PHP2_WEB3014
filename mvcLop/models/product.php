<?php 
    require_once 'db.php';

    function getProduct(){
        $sql = "select * from product";
        return getData($sql);
    }

    function add($name, $price, $quantity){
        $sql = "insert into product(name, price, quantity) 
        values('$name', '$price', '$quantity')";
        return getData($sql, false);
    }
?>