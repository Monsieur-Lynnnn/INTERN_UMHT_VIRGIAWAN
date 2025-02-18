<?php
class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        }

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

$produk3 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);



$produk4 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 45000);

$produk5 = new Produk("Biji Naga");
echo "Komik :" . $produk3->getLabel();
echo "<br>";
echo "Game :" . $produk4->getLabel();
echo "<br>";
var_dump($produk5);

