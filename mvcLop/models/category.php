<?php
require_once 'db.php';
function getAllCategory()
{
    $sql = 'select * from category';
    return getData($sql);
}
function addCat($name)
{
    $sql = "insert into category(name) values('$name')";
    return getData($sql, false);
}
function getCategory($id)
{
    $sql = 'select * from category where id=' . $id;
    return getData($sql, false);
}
function updateCat($name)
{
    $sql = "update  category set name='" . $name . "'";
    return getData($sql, false);
}
