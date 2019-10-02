<?php

// jualan Produk
// komik
// game

class Produk {  //class
     public $judul = "judul",  //property
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = "0";

     public function getLabel(){ //method
     	return "$this->penulis, $this->penerbit";
     }

}
//object
// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Sonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Pes 2019";
$produk4->penulis = "Neil Durkmen";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : ". $produk4->getLabel();