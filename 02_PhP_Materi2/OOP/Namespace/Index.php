<?php

require_once 'App/Init.php';


$produk3 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk4 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 450000, 50);

$cetakProduk = new CetakIngfoProduk();
$cetakProduk->tambahProduk($produk3);
$cetakProduk->tambahProduk($produk4);
echo $cetakProduk->cetak();

echo "<hr>";
new App\Service\User();