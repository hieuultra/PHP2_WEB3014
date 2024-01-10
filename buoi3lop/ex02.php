<?php
require_once './admin/taikhoan.php';
require_once './user/taikhoanUser.php';
//c1
// $objAdmin = new AdminNSP\TaiKhoan();
// echo "<br>";
// $objUser = new UserNSP\TaiKhoan;

//c2
use AdminNSP\TaiKhoan as AdminTK;
use UserNSP\TaiKhoan;

// $objAdmin = new AdminTK;
// echo "<br>";
// $objUser = new TaiKhoan;

function myNamed($a, $b = 2, $c = 4) { echo "$a $b $c"; } myNamed(1, c: 3);
