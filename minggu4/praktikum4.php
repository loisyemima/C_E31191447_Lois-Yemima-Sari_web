<?php
abstract class Car{
    //abstract classes can have properties
    protected $tankcolume;

    //abstract classes can have non abstract methods
    public function setTankvolume($volume){
        $this->tankvolume = $volume;
    }

    //abstract method
    public function calcNumMilesOnFullTank();
}

?>