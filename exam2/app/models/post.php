<?php

namespace App\models;

use App\Models\DB;

class Post extends DB
{
    function getPost()
    {
        $sql = "select * from post";
        return $this->getData($sql);
    }
    function add($title, $content, $create_at, $update_at)
    {
        $sql = "insert into post(title,content,create_at,update_at) values('$title','$content','$create_at','$update_at')";
        return $this->getData($sql, false);
    }
    function getP($id)
    {
        $sql = "select * from post where id=$id";
        return $this->getData($sql, false);
    }
    function update($id, $title, $content, $create_at, $update_at)
    {
        $sql = "update post set title='" . $title . "',content='" . $content . "',
        create_at='" . $create_at . "',update_at='" . $update_at . "'where id=$id";
        return $this->getData($sql, false);
    }
    function delete($id)
    {
        $sql = "delete from post where id=$id";
        return $this->getData($sql, false);
    }
}
