<?php
require_once 'models/product.php';
require_once 'models/category.php';
function listProduct()
{
    $product = getAllProduct();
    include 'views/product/list.php';
}
function addPro()
{
    $listCat = getAllCategory();
    include 'views/product/add.php';
}
function addProduct($name, $price, $image, $id_category)
{
    // Validate danh mục sản phẩm $id_category
    //xu ly them anh
    //thu muc se dc luu anh vao thu muc image
    $targetDir = "public/image/";
    //duong dan den file dc luu
    $targetFile = $targetDir . $image['name'];
    //tien hanh uplaod file anh
    if (move_uploaded_file($image['tmp_name'], $targetFile)) {
        $imageUrl = $targetFile;

        $checkAdd = insertPro($name, $price, $imageUrl, $id_category);
        if (!$checkAdd) { //neu phu dinh cua false : vi them sua xoa tra ve false
            echo '<script>alert("sucssely!!")</script>';
        } else {
            echo '<script>alert("Lỗi khi thêm sản phẩm vào cơ sở dữ liệu");</script>';
        }
    } else {
        echo '<script>alert("Lỗi khi upload ảnh sản phẩm");</script>';
    }
}
