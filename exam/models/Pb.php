<?php
require_once 'db.php';

class Pban extends DB
{
    function listAllPb()
    {
        $sql = "select * from phongban";
        return $this->getData($sql);
    }
    function add($name, $address, $email)
    {
        $sql = "insert into phongban (name,address,email) values('$name','$address','$email')";
        return $this->getData($sql, false);
    }
    function getPb($id)
    {
        $sql = "select * from phongban where id = $id";
        return $this->getData($sql, false);
    }
    function update($id, $name, $address, $email)
    {
        $sql = "update phongban set name='" . $name . "', address='" . $address . "', email='" . $email . "' where id=" . $id;
        return $this->getData($sql, false);
    }
    function delete($id)
    {
        $sql = "delete from phongban where id = $id";
        return $this->getData($sql, false);
    }
}
