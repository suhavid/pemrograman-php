<?php

// jualan Produk
// komik
// game

class Produk {  //class

     public $judul, //property
            $penulis,
            $penerbit,
            $harga;

     public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){
          $this->judul = $judul;
          $this->penulis = $penulis;
          $this->penerbit = $penerbit;
          $this->harga = $harga;

     }

     public function getLabel(){ //method
     	return "$this->penulis, $this->penerbit";
     }

     public function getInfoProduk(){
     	$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

     	return $str;
     }

}

 class Komik extends Produk{
 	 public $jmlHalaman;

     public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){
     	parent::__construct($judul, $penulis, $penerbit, $harga);

     	$this->jmlHalaman = $jmlHalaman;
     }


    public function getInfoProduk(){
       $str = "Komik :". parent::getInfoProduk()." - {$this->jmlHalaman} Halaman.";
       return $str;
    }
 }

 class Game extends Produk{
     public $waktuMain;

     public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){
     	parent::__construct($judul, $penulis, $penerbit, $harga);

     	$this->waktuMain = $waktuMain;
     }


 	 public function getInfoProduk(){
 	$str = "Game :". parent::getInfoProduk()." ~ {$this->waktuMain} Jam.";
       return $str;
    }
 }


 class CetakInfoProduk {
 	public function cetak(Produk $produk){
 		$str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
 		return $str;
 	}
 }

 //exeption handling

   try {
      // init bootstrapping phase
   
      $config_file_path = "config.php";
   
      if (!file_exists($config_file_path))
      {
        throw new Exception("Configuration file not found.");
      }
    
      // continue execution of the bootstrapping phase
  } catch (Exception $e) {
      echo $e->getMessage();
      die();
  }

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Sonen Jump", 30000, 100);
$produk2 = new Game("Pes 2019", "Neil Durkmen", "Sony Computer", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
