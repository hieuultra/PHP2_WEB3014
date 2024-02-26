<?php

namespace App\controllers;

use App\models\PhanHoiModel;

class PhanHoiController extends BaseController
{
    protected $phan;
    public function __construct()
    {
        $this->phan = new PhanHoiModel();
    }
    public function list()
    {
        $lstPhanHoi = $this->phan->getAllPhanHoi();
        return $this->render('phanHoi.index', ["lstPhanHoi" => $lstPhanHoi]);
    }
    function viewAdd()
    {
        return $this->render('phanHoi.index');
    }
    function add()
    {
        if (isset($_POST['add'])) {
            $error = [];
            if (empty($_POST['nguoiGui'])) {
                $error[] = "Vui lòng nhập tên người gửi";
            }
            if (count($error) > 0) {
                redirect('error', $error, 'viewAdd');
            } else {
                $this->phan->add($_POST['nguoigui'], $_POST['email'], $_POST['noidung'], $_POST['trangthai']);
                header('location:list');
            }
        }
    }
    function getById($id)
    {
        $phanhoi = $this->phan->getById($id);
        return $this->render('phanHoi.edit', ["phanhoi" => $phanhoi]);
    }
    function update($id, $nguoiGui, $email, $noiDung, $trangThai)
    {
        if (isset($_POST['edit'])) {
            $this->phan->update($id, $nguoiGui, $email, $noiDung, $trangThai);
            header('location:' . route('list'));
        }
    }
    function delete($id)
    {
        $this->phan->delete($id);
        header('location:' . route('list'));
    }
}
