<?php
require_once './Category.php';
$id = $_GET['id'];
$cateModel = new Category();
$cateModel->destroy($id);
header("location:c3.php");
