<?php

namespace App\Models;

use App\Models\DB;

class Account extends DB
{
    function sign_Up($username, $password, $email,  $address, $phone,  $img)
    {
        $sql = "insert into account(username,password,email,address,phone,img)
     values('$username','$password','$email','$address','$phone','$img')";
        return $this->getData($sql, false);
    }
    function check_user($username, $password)
    {
        $sql = "select * from account where username='" . $username . "' AND password='" . $password . "'";
        return $this->getData($sql, false);
    }
}
