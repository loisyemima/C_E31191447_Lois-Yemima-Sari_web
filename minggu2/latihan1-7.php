<?php
// membuat class laptop
class laptop{
    public $pemilik;
    public $merk;
  
   // buat method untuk class laptop
    function hidupkan_laptop() {
        return "Hidupkan Laptop ".$this->merk. " milik ".$this->pemilik;
    }
    function matikan_laptop() {
        return "Matikan Laptop ".$this->merk. " milik ".$this->pemilik;
   }
    function restart_laptop(){
        return "Matikan Laptop ".$this->merk. " milik ".$this->pemilik.". ".
            "Hidupkan Laptop ".$this->merk. " milik ".$this->pemilik;
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_1 = new laptop();
$laptop_2 = new laptop();
$laptop_3 = new laptop();

  
// set property
$laptop_1->pemilik="A";
$laptop_1->merk="ASUS";

$laptop_2->pemilik="B";
$laptop_2->merk="Acer";

$laptop_3->pemilik="C";
$laptop_3->merk="Lenovo";
  
// tampilkan method
echo $laptop_1->hidupkan_laptop();
echo "<br />";
echo $laptop_2->matikan_laptop();
echo "<br />";
echo $laptop_3->restart_laptop();
?>