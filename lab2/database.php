<?php

namespace Core;

use PDO;

class database
{
    public function __construct()
    {
        $this->conn = new PDO("mysql:host=127.0.0.1;dbname=poly-mvc;charset=utf8", "root", "");
    }
    public function HelloWorld()
    {
        echo "HelloWorld";
    }
}
