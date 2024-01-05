<?php

namespace App\Controllers;

use App\Models\product;

class HomeController extends BaseController
{
    public function index()
    {
        $products = product::all();
        $msg = isset($_GET['msg']) ? $_GET['msg'] : null;
        $this->render('homepage.index', ["listItem" => $products, 'errMsg' => $msg]);
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
