<?php
// require_once 'app/conNguoi.php';
require_once "vendor/autoload.php";

use Hieu\Mvc\conNguoi;

$conNguoi = new conNguoi();
$conNguoi->hanhDong();
