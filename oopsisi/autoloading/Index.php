<?php

require_once 'App/Init.php';


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Sonen Jump", 30000, 100);
$produk2 = new Game("Pes 2019", "Neil Durkmen", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();