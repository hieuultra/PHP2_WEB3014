<?php
abstract class model
{
    // Thuộc tính
    public $name;
    // Phương thức
    public function getData()
    {
        echo "Đây là hàm getData";
    }
    abstract public function add();
    abstract public function delete();
    abstract public function update();
}
