<?php
class kalkulator{
   
  private $a1;
  private $a2;
  Private $a3;

  public function angka($a1, $a2, $a3){
    $this->a1 = $a1;
    $this->a2 = $a2;
    $this->a3 = $a3;  
  }

  public function Tambah()
  {
    $hasil = $this->a1 + $this->a2 + $this->a3;
    return $hasil;
  }

  public function Kali()
  {
    $hasil = $this->a1 * $this->a2 * $this->a3;
    return $hasil;
  }

  public function Kurang()
  {

    $hasil = $this->a1 - $this->a2 - $this->a3;
    return $hasil;
  }

  public function Bagi()
  {
    $hasil = $this->a1 / $this->a2 / $this->a3;
    return $hasil;
  }

 
}

$data1 = new kalkulator();

$data1 ->angka(2, 15, 27);

echo $data1->tambah();
echo "<br />";
echo $data1->kali();
echo "<br />";
echo $data1->kurang();
echo "<br />";
echo $data1->bagi();


?>
