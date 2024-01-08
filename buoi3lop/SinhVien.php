<?php
class SinhVien
{
    private $name;
    protected $age;
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
