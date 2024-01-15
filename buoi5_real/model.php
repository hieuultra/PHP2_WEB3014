<?php
abstract class Model
{
    //Thuộc tính
    public $name;
    //Phương thức
    public function getData()
    {
        echo "Đây là hàm get data";
    }
    abstract public function add();
    abstract public function delete();
    abstract public function update();
}
