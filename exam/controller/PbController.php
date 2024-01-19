<?php
require_once './models/Pb.php';

class PbController
{
    function listPb()
    {
        $obj = new Pban();
        $pban = $obj->listAllPb();
        include 'views/Pb/list.php';
    }
    function addPb()
    {
        include 'views/Pb/add.php';
    }
    function viewUpdate()
    {
        $id = $_GET['id'];
        $obj1 = new Pban();
        $phongban = $obj1->getPb($id);
        include 'views/Pb/update.php';
    }
    function updatePb($name, $address, $email)
    {
        $id = $_GET['id'];
        $obj1 = new Pban();
        $phongban = $obj1->getPb($id);
        $check = $obj1->update($id, $name, $address, $email);
        if (!$check) {
            echo "<script>alert('cap nhap thanh cong')</script>";
            echo "<script>window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('cap nhat that bai')</script>";
            echo "<script>window.location.href='index.php';</script>";
        }
    }
    function delete()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $obj = new Pban();
        $obj->delete($id);
        echo '<script>alert("Xoa thành công")</script>';
        echo "<script>window.location.href='index.php';</script>";
    }
}
