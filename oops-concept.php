<?php

class Maths{

    public static $pi = 3.14;

    public static function add(...$num){
        return array_sum($num);
    }

}
print_r(Maths::$pi);
echo "<br>";
print_r(Maths::add(1,2,3,4,5));