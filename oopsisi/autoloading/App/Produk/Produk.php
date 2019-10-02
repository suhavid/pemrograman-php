<?php


 abstract class Produk {  //class

     protected $judul, //property
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

     abstract function getInfo();

 }
