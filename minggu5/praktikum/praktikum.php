<?php
interface Car{
    public function setModel($name);

    public Function getModel();
}

class miniCar implements Car{
    Private $model;

    public function setModel($name){
        $this->model = $name;
    }

    public Function getModel(){
        return $this->model;
    }
}

$minicar1 = new miniCar();
$minicar2 = new miniCar();
$minicar3 = new miniCar();

echo $minicar1->setModel("multi-purpose vechicle");
echo $minicar2->setModel("sedan");
echo $minicar3->setModel("hatchback");
?>