<?php
class DongVat
{
    protected $ten;
    protected $mauLong;

    public function __construct($ten = "", $mauLong = "")
    {
        $this->ten = $ten;
        $this->mauLong = $mauLong;
    }

    public function an()
    {
        echo "pt an";
        $this->di();
    }
    public function nhay()
    {
        echo "day la pt nhay";
    }
}
class ConMeo extends DongVat
{
    public $giongMeo;
    public $XuatXu;

    public function __construct($ten = '', $mauLong = '', $giongMeo, $XuatXu)
    {
        parent::__construct($ten, $mauLong);
        $this->giongMeo = $giongMeo;
        $this->XuatXu = $XuatXu;
    }

    public function di()
    {
        echo 'pt di';
    }
    public function nhay()
    {
        parent::nhay();
        echo "<br>day la pt mua";
    }
}
//khoi tao tu con
$conMeo = new ConMeo('baby', 'den', 'meo mun', 'nga');
// $conMeo->di();
$conMeo->nhay();
echo '<br>';
// var_dump($conMeo);
// $conMeo->an();
//khoi tao tu cha
$dongVat = new DongVat();
// $dongVat->an();
