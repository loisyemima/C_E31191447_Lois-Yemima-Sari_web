<?php
class Car{
    final public function hello(){
        return "beep";
    }
}

class SportsCar extends Car{
    
    public function hello(){
        return "Hallo";
    }
}

$sportsCar1 = new SportsCar();

echo $sportsCar1->hello();

?>