<?php

namespace App\models;

use App\models\BaseModel;
use App\models\SachInterface;

class SachModel extends BaseModel implements SachInterface 
{
    public function getAllBook()
    {
        $sql = "select * from book";
        return $this->getAllData($sql);
    }
    public function add($name, $author, $quantity, $price)
    {
        $sql = "insert into book (name, author , quantity, price) values ('$name','$author','$quantity','$price')";
        return $this->getRowData($sql);
    }
    public function getById($id)
    {
        $sql = "select * from book where id=" . $id;
        return $this->getRowData($sql);
    }
    public function update($id, $name, $author, $quantity, $price)
    {
        $sql = "update book set name = '$name', author = '$author', quantity = '$quantity', price = '$price' where id = " . $id;
        return $this->getRowData($sql);
    }
    public function delete($id)
    {
        $sql = "delete from book where id=" . $id;
        return $this->getRowData($sql);
    }
}
