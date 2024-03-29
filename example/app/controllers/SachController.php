<?php

namespace App\controllers;

use App\models\SachModel;

class SachController extends BaseController
{
    protected $book;
    public function __construct()
    {
        $this->book = new SachModel();
    }
    function listBook()
    {
        $lstSach = $this->book->getAllBook();
        return $this->render('sach.index', ["lstSach" => $lstSach]);
    }
    function viewAdd()
    {
        return $this->render('sach.add');
    }
    function add()
    {
        if (isset($_POST['add'])) {
            $error = [];
            if (empty($_POST['name'])) {
                $error[] = "Ko dc de trong ten";
            }
            if (empty($_POST['author'])) {
                $error[] = "Ko dc de trong author";
            }
            if (empty($_POST['quantity'])) {
                $error[] = "Ko dc de trong quantity";
            }
            if (!is_numeric($_POST['quantity'])) {
                $error[] = "so luong phai la kieu so";
            }
            if (empty($_POST['price'])) {
                $error[] = "Ko dc de trong price";
            }
            if (empty($_POST['email'])) {
                $error[] = "Ko dc de trong email";
            } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $error[] = "Định dạng email không hợp lệ";
            }
            if (count($error) > 0) {
                redirect('errors', $error, 'viewAdd');
            } else {
                $this->book->add($_POST['name'], $_POST['author'], $_POST['quantity'], $_POST['price'], $_POST['email']);
                header("location: list ");
            }
        }
    }
    function getById($id)
    {
        $gBook = $this->book->getById($id);
        return $this->render('sach.edit', ["gBook" => $gBook]);
    }
    function update($id)
    {
        if (isset($_POST['update'])) {
            $this->book->update($id, $_POST['name'], $_POST['author'], $_POST['quantity'], $_POST['price']);
            // echo "<script>alert('update succselly')</script>";
            header("location:  " . route("list"));
        }
    }
    function delete($id)
    {
        $this->book->delete($id);
        header("location:  " . route("list"));
    }
}
