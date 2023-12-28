<?php
//3.dinh nghia, lay vd va so sanh giua static method va method binh thuong trong class

class animal
{
    var $name = "bui trung hieu";
    function run()
    {

        echo "run";
    }
    static function eat()
    {
        echo "eat";
    }
}
animal::eat();
