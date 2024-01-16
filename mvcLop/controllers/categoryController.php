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
function updateCat($name)
{
    $cat_id = isset($_GET['id']) ? $_GET['id'] : null;
    $cate = getCategory($cat_id);

    $check = editCat($cat_id, $name);
    if (!$check) {
        echo '<script>alert("Cap nhat thành công")</script>';
        echo '<script>window.location.href = "index.php";</script>';
    } else {
        echo '<script>alert("Cap nhat that bai")</script>';
        echo '<script>window.location.href = "index.php";</script>';
    }
}
function hardDeleteCat()
{
    $cat_id = isset($_GET['id']) ? $_GET['id'] : null;
    hardDelete($cat_id);
    echo '<script>alert("Xoa thành công")</script>';
    echo "<script>window.location.href='index.php';</script>";
}
function softDeleteCat()
{
    $cat_id = isset($_GET['id']) ? $_GET['id'] : null;
    softDelete($cat_id);
    echo '<script>alert("Xoa thành công")</script>';
    echo "<script>window.location.href='index.php';</script>";
}
