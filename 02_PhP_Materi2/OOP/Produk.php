<?php
class Produk {
    public $judul = "Judul",
           $penulis = "Penulis",
           $penerbit = "Penerbit",
           $harga = "1000";

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

} 
// $Produk1 = new Produk();
// $Produk1->judul = "Narto";
// var_dump($Produk1);

// $Produk2 = new Produk(); 
// $Produk2->judul = "Uncharted";
// $Produk2->Tambahproperty = "Aonfow";
// var_dump($Produk2);

$produk3 = new Produk();
$produk3->judul = "Narto";
$produk3->penulis = "Nathaan";
$produk3->penerbit = "Fadhil";
$produk3->harga = 30000;


$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Armstrong";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 2500000;

echo "Komik :" . $produk3->getLabel();
echo "<br>";
echo "Game :" . $produk4->getLabel();
