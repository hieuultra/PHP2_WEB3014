<?php
require_once 'db.php';
function getAllCategory()
{
    $sql = 'select * from category where status=1';
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
function hardDelete($cat_id)
{
    $sql = "delete from category where id=" . $cat_id;
    return getData($sql, false);
}
function softDelete($cat_id)
{
    $sql = "update  category set status=0 where id=" . $cat_id;
    return getData($sql, false);
}
