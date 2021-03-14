<?php
interface hitungLuas{
    public function hitungLuas();
}

class persegi implements hitungLuas{
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function hitungLuas(){
        return $this->panjang * $this->lebar;
    }
}

class segitiga implements hitungLuas{
    private $alas;
  private $tinggi;

  public function __construct($alas, $tinggi)
  {
    $this->alas = $alas;
    $this->tinggi = $tinggi;
  }

  function hitungLuas()
  {
    return  $this->alas * $this->tinggi * (1/2);
  }
}

class lingkaran implements hitungLuas
{
  private $jari;

  public function __construct($jari)
  {
    $this->jari = $jari;
  }

  function hitungLuas()
  {
    return $this->jari * $this->jari * pi();
  }
}

$persegi = new persegi(9, 12);
$segitiga = new segitiga(7, 15);
$lingkaran = new lingkaran(5);

echo "Luas persegi : " . $persegi->hitungLuas() . "<br>";
echo "Luas segitga : " . $segitiga->hitungLuas() . "<br>";
echo "Luas lingkaran : " . $lingkaran->hitungLuas() . "<br>";
