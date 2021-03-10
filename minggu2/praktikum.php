<?php
class Car {
    //properties
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;

    //method = hello
    public function hello(){
        return "Beep I am a".$this ->comp.
        "</i>, and I am". $this -> color;

    }
}

//create object di class
$bmw = new Car();
$mercedes = new Car();

$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";

echo $bmw->hello();
?>