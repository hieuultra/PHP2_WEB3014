<?php

namespace App\controllers;

use App\models\Guest;
use eftec\bladeone\BladeOne;

class GuestController
{
    public $view;

    function __construct()
    {
        $view = "app/views";
        $cache = "app/cache";
        $this->view = new BladeOne($view, $cache, BladeOne::MODE_AUTO);
    }
    function listGuest()
    {
        $obj = new Guest();
        $guest = $obj->listGuest();
        return $this->view->run('guest.list', ['guest' => $guest]);
    }
    function addGuest()
    {
        return $this->view->run('guest.add');
    }
    function add()
    {
        $guest = new Guest();
        $guest->add($_POST['name'], $_POST['password'], $_POST['address'], $_POST['email']);
        header('Location:index.php');
    }
    function viewUpdate()
    {
        $id = $_GET['id'];
        $obj = new Guest();
        $guest = $obj->getGuest($id);
        return $this->view->run('guest.update', ['guest' => $guest]);
    }
    function editGuest()
    {
        $id = $_GET['id'];
        $obj = new Guest();
        $guest = $obj->getGuest($id);
        $check = $obj->update($id, $_POST['name'], $_POST['password'], $_POST['address'], $_POST['email']);
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
        $obj = new Guest();
        $obj->delete($id);
        echo '<script>alert("Xoa thành công")</script>';
        echo "<script>window.location.href='index.php';</script>";
    }
}
