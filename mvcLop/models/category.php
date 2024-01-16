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
function editCat($cat_id, $name)
{
    $sql = "update  category set name='" . $name . "' where id=" . $cat_id;
    return getData($sql, false);
}
