<?php
class conNguoi
{
    protected $hoTen;
    public $namSinh;
    public $diaChi;
    public $email;
    public $sdt;

    public function __construct($hoTen, $namSinh, $diaChi, $email, $sdt)
    {
        $this->hoTen = $hoTen;
        $this->namSinh = $namSinh;
        $this->diaChi = $diaChi;
        $this->email = $email;
        $this->sdt = $sdt;
    }
    public function setConNguoi($newName, $newBorn, $newAddress, $newEmail, $newSdt)
    {
        $this->hoTen = $newName;
        $this->namSinh = $newBorn;
        $this->diaChi = $newAddress;
        $this->email = $newEmail;
        $this->sdt = $newSdt;
    }
    public function getHoten()
    {
        return $this->hoTen;
    }
    public function getNamSinh()
    {
        return $this->namSinh;
    }
    public function getDiaChi()
    {
        return $this->diaChi;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getSdt()
    {
        return $this->sdt;
    }

    public function getAge()
    {
        return date("Y") - $this->namSinh;
    }
    public function info()
    {
        return "$this->hoTen $this->namSinh  $this->diaChi  $this->email  $this->sdt";
    }
}
class GiangVien extends conNguoi
{
    public $soGioGiang;
    public $luongGio;
    public function __construct($hoTen, $namSinh, $diaChi, $email, $sdt, $soGioGiang, $luongGio)
    {
        parent::__construct($hoTen, $namSinh, $diaChi, $email, $sdt);
        $this->soGioGiang = $soGioGiang;
        $this->luongGio = $luongGio;
    }
    public function tinhLuong()
    {
        return "tong luong la: " . $this->soGioGiang * $this->luongGio;
    }
    public function info()
    {
        $info = parent::info();
        return $info . "<br>so gio giang la: " . $this->soGioGiang . ", so gio day: " . $this->luongGio;
    }
}
// $hieu = new conNguoi('bui trung hieu', 2004, 'ha noi', 'hieubtph32408', '0363707561');
// // echo $hieu->getDiaChi();
// echo "<br>";
// echo $hieu->getAge();
// echo "<br>";
// echo $hieu->info();
// $hung = new GiangVien('hung cv', 1998, 'ha noi', 'hungvcph32456', '0983275927859', 9, 6);
// echo "<br>";
// echo $hung->tinhLuong();
// echo "<br>";
// echo $hung->info();


