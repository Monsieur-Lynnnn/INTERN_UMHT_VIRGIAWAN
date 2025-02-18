<?php
class Produk {
    public $judul, $penulis, $penerbit, $harga, $jmlhalaman, $waktumain, $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", 
        $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0, $waktumain = 0, $tipe = "tipe") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhalaman = $jmlhalaman;
        $this->waktumain = $waktumain;
        $this->tipe = $tipe;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getIngfoLengkap() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        if ($this->tipe == "Komik") {
            $str .= " - {$this->jmlhalaman} Halaman.";
        } elseif ($this->tipe == "Game") {
            $str .= " - {$this->waktumain} Jam.";
        }

        return $str;
    }
}

class CetakIngfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

// Membuat objek dengan tipe yang benar
$produk3 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk4 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 45000, 0, 50, "Game");

echo $produk3->getIngfoLengkap();
echo "<br>";
echo $produk4->getIngfoLengkap();
