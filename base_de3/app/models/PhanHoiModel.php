<?php

namespace App\models;

use App\models\BaseModel;

class PhanHoiModel extends BaseModel
{
    function getAllPhanHoi()
    {
        $sql = "select * from phanhoi";
        return $this->getAllData($sql);
    }
    function add($nguoiGui, $email, $noiDung, $trangThai)
    {
        $sql = "insert into phanhoi(nguoiGui,email,noiDung,trangThai) values('$nguoiGui','$email','$noiDung','$trangThai')";
        return $this->getRowData($sql);
    }
    function getById($id)
    {
        $sql = "select * from phanhoi where id=$id";
        return $this->getRowData($sql);
    }
    function update($id, $nguoiGui, $email, $noiDung, $trangThai)
    {
        $sql = "update phanhoi set nguoiGui='$nguoiGui',email='$email',noiDung='$noiDung',trangThai='$trangThai' where id=$id";
        return $this->getRowData($sql);
    }
    function delete($id)
    {
        $sql = "delete from phanhoi where id=$id";
        return $this->getRowData($sql);
    }
}
