<?php
class Crush
{
    private $name;
    private $born;
    private $sex;
    private $address;
    private $tel;

    function __construct($name, $born, $sex, $address, $tel)
    {
        $this->name = $name;
        $this->born = $born;
        $this->sex = $sex;
        $this->address = $address;
        $this->tel = $tel;
    }
    public function setName($newName)
    {
        $this->name = $newName;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setBorn($newBorn)
    {
        $this->born = $newBorn;
    }
    public function getBorn()
    {
        return $this->born;
    }
    public function setSex($newSex)
    {
        $this->sex = $newSex;
    }
    public function getSex()
    {
        return $this->sex;
    }
    public function setAddress($newAddress)
    {
        $this->address = $newAddress;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function setTel($newTel)
    {
        $this->tel = $newTel;
    }
    public function getTel()
    {
        return $this->tel;
    }
    public function getAge()
    {
        return date("Y") - $this->born;
    }
    public function check()
    {
        return $this->getAge() >= 18 ? "Có thể kết hôn" : "Chưa đủ tuổi kết hôn";
    }
    public function info()
    {
        return "$this->name $this->born  $this->sex  $this->address  $this->tel";
    }
}
$hieu = new Crush('bui trung hieu', 2004, 'nam', 'ha noi', '09876431');
echo $hieu->getAge();
echo "<br>";
echo $hieu->info();
echo "<br>";
echo $hieu->check();
