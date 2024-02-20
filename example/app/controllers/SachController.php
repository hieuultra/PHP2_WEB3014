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
            $this->book->add($_POST['name'], $_POST['author'], $_POST['quantity'], $_POST['price']);
            header("location: list ");
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
            header("location:  " .route("list"));
        }
    }
    function delete($id)
    {
        $this->book->delete($id);
        header("location:  " .route("list"));
    }
}
