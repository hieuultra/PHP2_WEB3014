<?php
//2. dinh nghia va lay vd cho khai niem ham khoi tao
//ham khoi tao la ham goi ngay lap tuc khi tao ra 1 thuc the moi
class Animal
{
    function __construct($name, $age,$address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        echo "tao moi thuc the:<br>";
        var_dump($this);
        echo "<br>";
    }
}
$thien = new Animal("tran huu thien",30,"ha nam");
// $thien->address="ha nam";
$nam = new Animal("nguyen van nam",21,'ha tay');
