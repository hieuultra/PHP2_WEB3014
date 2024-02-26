<?php

namespace App\controllers;

use App\models\SachModel;

class SachController extends BaseController
{
    protected $sach;
    public function __construct()
    {
        $this->sach = new SachModel();
    }
    function listSach()
    {
        $lstSach = $this->sach->getAllSach();
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
            if (count($error) > 0) {
                redirect('error', $error, 'viewAdd');
            } else {
                $this->sach->add($_POST['name'], $_POST['title'], $_POST['create_at']);
                header("location: listSach");
            }
        }
    }
    function getById($id)
    {
        $post = $this->sach->getById($id);
        return $this->render('sach.edit', ["post" => $post]);
    }
    function update($id)
    {
        if (isset($_POST['edit'])) {
            $this->sach->update($id, $_POST['name'], $_POST['title'], $_POST['create_at']);
            header("location: " . route("listSach"));
        }
    }
    function delete($id)
    {
        $this->sach->delete($id);
        header("location: " . route("listSach"));
    }
}
