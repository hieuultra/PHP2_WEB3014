<?php

namespace App\models;

use App\models\DB;

class Guest extends DB
{
    function listGuest()
    {
        $sql = "select * from guest";
        return $this->getData($sql);
    }
    function add($name, $password, $address, $email)
    {
        $sql = "insert into guest(name, password, address, email) values('$name','$password','$address','$email')";
        return $this->getData($sql, false);
    }
    function getGuest($id)
    {
        $sql = "select * from guest where id=$id";
        return $this->getData($sql, false);
    }
    function update($id, $name, $password, $address, $email)
    {
        $sql = "update guest set name='" . $name . "', password='" . $password . "', address='" . $address . "',
        email='" . $email . "' where id=" . $id;
        return $this->getData($sql, false);
    }
    function delete($id)
    {
        $sql = "delete from guest where id = $id";
        return $this->getData($sql, false);
    }
}
