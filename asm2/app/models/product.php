<?php

namespace App\models;

use App\models\DB;

class Product extends DB
{
    function getAllProduct()
    {
        $sql = "select p.*,c.name as category_name from product p join category c on p.id_cat=c.id where p.status=1";
        return $this->getData($sql);
    }
    function insertPro($name, $img, $description, $price, $discount, $id_cat)
    {
        $sql = "insert into product(name,img, description,price,discount,id_cat)
         values('$name','$img','$description','$price','$discount','$id_cat')";
        return $this->getData($sql, false);
    }
    function getPro($id)
    {
        $sql = "select p.*,c.name as category_name from product p join category c on p.id_cat=c.id where p.id = $id";
        return $this->getData($sql, false);
    }
    function update($id, $name, $img, $description, $price, $discount, $id_cat)
    {
        $sql = "update product set name='" . $name . "',img='" . $img . "',description='" . $description . "',
        price='" . $price . "',discount='" . $discount . "',id_cat='" . $id_cat . "' where id=" . $id;
        return $this->getData($sql, false);
    }
    function hard_delete_pro($id)
    {
        $sql = "delete from product where id = $id";
        return $this->getData($sql, false);
    }
    function soft_delete_pro($id)
    {
        $sql = "update product set status =0 where id= $id";
        return $this->getData($sql, false);
    }
}
