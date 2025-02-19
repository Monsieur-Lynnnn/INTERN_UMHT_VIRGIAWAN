<?php
class Produk {
    public $judul, $penulis, $penerbit, $harga, $jmlhalaman, $waktumain;

    public function __construct($judul = "judul", $penulis = "penulis", 
        $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0, $waktumain = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhalaman = $jmlhalaman;
        $this->waktumain = $waktumain;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getIngfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class Komik extends Produk {
    public function getIngfoProduk() {
        $str = "Komik : parent:: getIngfoProduk - {$this->jmlhalaman} Halaman.";
        return $str; 
    }
}

class Game extends Produk {
    public function getIngfoProduk() {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktumain} Jam.";
        return $str; 
    }
}

class CetakIngfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk3 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk4 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 45000, 0, 50);


echo $produk3->getIngfoProduk();
echo "<br>";
echo $produk4->getIngfoProduk();
