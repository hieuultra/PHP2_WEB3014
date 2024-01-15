<?php
require_once 'db.php';
function getAllCategory()
{
    $sql = "select * from category";
    return getData($sql);
}
