<?php
//3.dinh nghia, lay vd va so sanh giua static method va method binh thuong trong class

class animals
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
        echo "eat";
    }
}
// $vinh = new animal();
// $vinh->run();
echo "<br>";
animals::eat();
