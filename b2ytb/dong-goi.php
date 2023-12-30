<?php
// giúp bảo mật/bảo vệ dữ liệu của các phương thức/thuộc tính trong 1 lớp
// tránh việc vô tình, cố ý thay đổi dữ liệu của thuộc tính đã đc định nghĩa hoặc 
// cố tình thực thi phương thức trái phép

// 3 từ khóa (modifiers) public, protected, private - giới hạn phạm vi truy cập của các thuộc
// tính & phương thức trong 1 class

// private (định nghĩa trong lớp Animal) - phương thức/thuộc tính chỉ đc phép truy cập trong 
// phạm vi lớp định nghĩa ra nó

// protected - được phép truy cập tại lớp định nghĩa ra nó và các lớp kế thừa 
// public - được phép truy cập tại bất kỳ chỗ nào

class Animal
{
    private $name = "binh nb";
    protected $age = 100;
    public function setName($newName)
    {
        $this->name = $newName;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setAge($newAge)
    {
        $this->age = $newAge;
    }
}
class Duck extends Animal
{
    public function getAge()
    {
        return $this->age;
    }
}
// $vinh = new Animal();
// var_dump($vinh);
// echo "<br>";
// $vinh->setName("hieu");
// var_dump($vinh);
// echo "<br>";
// echo $vinh->getName();

$vinh= new Duck();
$vinh->setAge(29);
// var_dump($vinh);
echo $vinh->getAge();
