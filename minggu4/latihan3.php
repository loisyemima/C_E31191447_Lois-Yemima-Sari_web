<?php
class tablet{
    public $merk = "nokia";
    protected $camera = "24 mp";
    private $memory = "32 gb";

    function setTable(){
        echo $this->memory;
    }
}

class handphone extends tablet{
    public $handphone_baru;

    function beli_handphone(){
        echo $this->camera;
    }
}

$item = new handphone();

echo $item->merk;
echo $item->camera;
echo $item->memory;
echo $item->bukaApp();
echo $item->beli_handphone();
?>