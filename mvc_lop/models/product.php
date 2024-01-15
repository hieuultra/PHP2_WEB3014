<?php
require_once 'db.php';

function getAllProduct()
{
    $sql = "select p.*,c.category_name from product p join category c on p.id_category=c.id where p.status=1";
    return getData($sql); //ket noi csdl va truy van
}
function insertPro($name, $price, $image, $id_category)
{
    $sql = "insert into product(name,price,image,id_category) values('$name','$price','$image','$id_category')";
    return getData($sql, false);
}
