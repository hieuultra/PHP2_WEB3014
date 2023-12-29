<?php
// tính chất đa hình (áp dụng cho các lớp có quan hệ kế thừa)
// tính chất này thể hiện qua từ khóa overwrite (ghi đè/định nghĩa lại) cac thuộc tính & phương thức
// đã được định nghia ở lớp cha
class SinhVien
{
    function say()
    {
        echo "hello world!";
    }
}
class Animal extends SinhVien
{
}

class Duck extends Animal
{
    function say()
    {
        echo "cạp cạp<br>";
    }
}

class Chicken extends Animal
{
}

$vinh = new Duck();
$vinh->say();
$nam = new Chicken();
$nam->say();
