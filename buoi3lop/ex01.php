<?php
require_once 'SinhVien.php';
$hieu = new SinhVien();
$hieu->setName('bui trung hieu');
echo $hieu->getName();
