<?php

namespace App\models;

use App\models\DB;

class Category extends DB
{
    function getAllCategory()
    {
        $sql = "select * from category";
        return $this->getData($sql);
    }
    function insertCat($name,$img)
    {
        $sql = "insert into category(name,img) values('$name','$img')";
        return $this->getData($sql, false);
    }
}
