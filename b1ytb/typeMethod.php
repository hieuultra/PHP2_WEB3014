<?php
//3.dinh nghia, lay vd va so sanh giua static method va method binh thuong trong class

class hieuvip
{
    var $name = "bui trung hieu";
    function run()
    {
        echo "run is " . $this->name . "!";
    }
    static function eat()
    {
        // $model = new animals();
        //new static(): static nam trong class animals nen co the dai dien thay the ten class 
        $model= new static();
        $model->run();
        echo "<br>";
        //ko dc phep dung $this
        // echo "eat";
    }
}
$vinh = new hieuvip();
$vinh->name='vinh ngu';
$vinh->run();
echo "<br>";
$vinh::eat();
