<?php

namespace App\Controllers;

use App\Models\product;

class HomeController
{
    public function index()
    {
        $products = product::all();
        include_once './app/views/homepage.php';
    }
    public function detail()
    {
        return "trang chi tiet 1 sp";
    }
    public function contact()
    {
        return "trang lien he du an";
    }
}
