<?php

namespace App\models;

use App\models\DB;

class Product extends DB
{
    function getProduct()
    {
        $sql = "select * from product";
        return $this->getData($sql);
    }

    function add($name, $price, $quantity)
    {
        $sql = "insert into product(name, price, quantity) 
            values('$name', '$price', '$quantity')";
        return $this->getData($sql, false);
    }
    function getPro($id)
    {
        $sql = "select * from product where id = $id";
        return $this->getData($sql, false);
    }
    function update($id, $name, $price, $quantity)
    {
        $sql = "update product set name='" . $name . "', price='" . $price . "', quantity='" . $quantity . "' where id=" . $id;
        return $this->getData($sql, false);
    }
    function delete($id)
    {
        $sql = "delete from product where id = $id";
        return $this->getData($sql, false);
    }
}
