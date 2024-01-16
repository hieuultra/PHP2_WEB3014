<?php
require_once 'models/category.php';

function listCategory()
{
    $listCat = getAllCategory();
    include 'views/category/list.php';
}
function addCategory()
{
    include 'views/category/add.php';
}
function viewEditCat()
{
    $cat_id = $_GET['id'];
    $cate = getCategory($cat_id);
    include 'views/category/update.php';
}
