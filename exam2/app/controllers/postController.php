<?php

namespace App\controllers;

use App\models\Post;

class PostController
{
    function listPost()
    {
        $obj = new Post();
        $post = $obj->getPost();
        require_once 'app/views/list.php';
    }
    function addPost()
    {
        require_once 'app/views/add.php';
    }
    function add()
    {
        $post = new Post();
        $post->add($_POST['title'], $_POST['content'], $_POST['create_at'], $_POST['update_at']);
        header("location: index.php");
    }
    function viewUpdate()
    {
        $id = $_GET['id'];
        $obj1 = new Post();
        $post = $obj1->getP($id);
        require_once 'app/views/update.php';
    }
    function editPost()
    {
        $id = $_GET['id'];
        $obj1 = new Post();
        $post = $obj1->getP($id);
        $check = $obj1->update($id, $_POST['title'], $_POST['content'], $_POST['create_at'], $_POST['update_at']);
        if (!$check) {
            echo "<script>alert('update thanh cong!')</script>";
            echo "<script>window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('update failed!')</script>";
            echo "<script>window.location.href='index.php';</script>";
        }
    }
    function delete()
    {
        $id = $_GET['id'];
        $obj1 = new Post();
        $obj1->delete($id);
        echo '<script>alert("Xoa thành công")</script>';
        echo "<script>window.location.href='index.php';</script>";
    }
}
