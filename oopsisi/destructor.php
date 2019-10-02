<?php

// jualan Produk
// komik
// game

class Produk {  //class
     public $judul = "judul",  //property
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = "0";

     public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
          $this->judul = $judul;
          $this->penulis = $penulis;
          $this->penerbit = $penerbit;
          $this->harga = $harga;
     }

     public function getLabel(){ //method
     	return "$this->penulis, $this->penerbit";
     }

}


 class CetakInfoProduk {
 	public function cetak(Produk $produk){
 		$str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
 		return $str;
 	}


      public function __destruct()
        {
          echo 'Terima Kasih';
        }

 }

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Sonen Jump", 30000);
$produk2 = new Produk("Pes 2019", "Neil Durkmen", "Sony Computer", 250000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : ". $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
echo "<hr>";