<?php

namespace App\models;

use App\models\DB;

class Category extends DB
{
    function getAllCategory()
    {
        $sql = "select * from category where status =1";
        return $this->getData($sql);
    }
    function insertCat($name, $img)
    {
        $sql = "insert into category(name,img) values('$name','$img')";
        return $this->getData($sql, false);
    }
    function getCat($id)
    {
        $sql = "select * from category where id = $id";
        return $this->getData($sql, false);
    }
    function update($id, $name)
    {
        $sql = "update category set name='" . $name . "' where id=" . $id;
        return $this->getData($sql, false);
    }
    function hard_delete_cat($id)
    {
        $sql = "delete from category where id = $id";
        return $this->getData($sql, false);
    }
    function soft_delete_cat($id)
    {
        $sql = "update category set status =0 where id= $id";
        return $this->getData($sql, false);
    }
}
