<?php

namespace App\Controllers;

use App\Models\product;

class HomeController extends BaseController
{
    public function index()
    {
        $products = product::all();
        $this->render('homepage.index', ["listItem" => $products]);
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
