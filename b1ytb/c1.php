<?php
//1. khai niem va viet code demo cho tinh chat truu tuong trong oop
//2. dinh nghia va lay vd cho khai niem ham khoi tao
//3.dinh nghia, lay vd va so sanh giua static method va method binh
//OOP: pp lap trinh huong doi tuong- lam viec voi cac class
//Moi class <=> 1 doi tuong trong de bai <=> 1 kieu du lieu moi
//Loi ich:
// - tai su dung code tot hon
//- mo rong du an tot
//-tang tinh bao mat cua du an
//-phat trien va su dung cac framework <=> phat trien he thong nhanh hon    

class conVit
{
    var $maso;
    var $canNang;
    var $ngaysinh;
    var $masochuong;
    function an()
    {
        echo "con vit co ma so" . $this->maso . "dang an";
    }
    function xuatChuong()
    {
        $x = 100;
        echo "con cit co ma so" . $this->maso . ",can nang" . $this->canNang . " 
        ,sinh truong trong" . $x . "ngay" . "da xuat chuong";
    }
    function choAn($luongthucan)
    {
        $this->canNang += $luongthucan;
    }
}
