<?php
class Circle implements Shape{
    private $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }

    public function calcArea(){
        return $this-> * $this->radius * pi();
    }
}