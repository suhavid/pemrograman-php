<?php

// jualan Produk
// komik
// game

final class AlamatTokoh {
       function Alamat(){
        echo "Jl.Sambikerep RT 10 RW 04 Surabaya";
        echo "<hr>";
       }
  }

  $almt = new AlamatTokoh;
  $almt->Alamat();

  // class AlamatS extends AlamatTokoh
  // {
  //   public function __construct()
  //   {
  //     echo $this->Alamat();   
  //   }
  // }

  // class CobaMethod
  // {
  //   final public function coba()
  //   {}
  // }

  // class CobaNgambil
  // {
  //   public function coba()
  //   {}
  // }


 abstract class Produk {  //class

     public $judul, //property
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;


     public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){
          $this->judul = $judul;
          $this->penulis = $penulis;
          $this->penerbit = $penerbit;
          $this->harga = $harga;

      }


     public function getHarga(){
    	return $this->harga - ($this->harga * $this->diskon / 100 );
     }

     public function getLabel(){ //method
     	return "$this->penulis, $this->penerbit";
     }

     abstract public function getInfoProduk();

     public function getInfo(){
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


    public function setDiskon($diskon){
    	$this->diskon = $diskon;
    }


    public function getInfoProduk(){
       $str = "Komik :". $this->getInfo()." - {$this->jmlHalaman} Halaman.";
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
 	     $str = "Game :". $this->getInfo()." ~ {$this->waktuMain} Jam.";
       return $str;
    }

 }


 class CetakInfoProduk {
 	public $daftarProduk = array();

  public function tambahProduk(produk $produk){
    $this->daftarProduk[] = $produk;
  }

  public function cetak (){
    $str = "DAFTAR PRODUK : <br>";

    foreach ($this->daftarProduk as $p) {
      $str .= "-{$p->getInfoProduk()}<br>";
    }
    return $str;
  }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Sonen Jump", 30000, 100);
$produk2 = new Game("Pes 2019", "Neil Durkmen", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();