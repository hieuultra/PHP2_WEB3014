<?php
// class B là con (có quan hệ kế thừa) class A (B extends A)
// lớp B có thể sử dụng/truy cập được các thuộc tính & phương thức được định nghĩa ở lớp A
// A không được phép sử dụng các tính chất/phương thức của lớp con của nó
// php là ngôn ngữ đơn kế thừa (1 lớp chỉ đc phép extends 1 lớp khác)
// 1 class A có thể là cha của nhiều lớp khác nhau
// class Animal
// {
//     var $name;
//     var $age;
//     function __construct($name = "", $age = 0)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }
//     function getInfo()
//     {
//         echo "toi ten la $this->name - toi dc $this->age tuoi";
//     }
// }

// class dog extends Animal
// {
// }

// class cat extends Animal
// {
// }
// $rex = new dog('rex', 5);
// $rin = new cat('Rin', 2);

// $rex->getInfo();
// echo "<br>";
// $rin->getInfo();

require_once './Category.php';
require_once './product.php';
// $cates = Category::all();
// $prods = product::all();
// $pro=product::find(7);
// $pros = product::where('price', '<', 5000)->get();
$pros = product::where('name', 'like', '%DVM%')->get();
echo "<pre>";
// var_dump($pros);

class A
{
    static function where()
    {
        $model = new static;
        return $model;
    }
    function get()
    {
        return 'danh sách dữ liệu';
    }
}
// $thienth=A::where();
// var_dump($thienth);
// $thienth = new A();
// echo $thienth->get();
echo A::where()->get();
