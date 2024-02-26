<?php

namespace App\models;

use App\Models\BaseModel;

class SachModel extends BaseModel
{
    function getAllSach()
    {
        $sql = "select * from post";
        return $this->getAllData($sql);
    }
    function add($name, $title, $create_at)
    {
        $sql = "insert into post(name, title, create_at) values ('$name', '$title', '$create_at')";
        return $this->getRowData($sql);
    }
    function getById($id)
    {
        $sql = "select * from post where id = $id";
        return $this->getRowData($sql);
    }
    function update($id, $name, $title, $create_at)
    {
        $sql = "update post set name ='$name' , title = '$title', create_at = '$create_at' where id = $id";
        return $this->getRowData($sql);
    }
    function delete($id)
    {
        $sql = "delete from post where id = $id";
        return $this->getRowData($sql);
    }
}
