<?php

interface IngfoProduk {
    public function getIngfoProduk();
}

abstract class Produk {
    protected $judul, $penulis, $penerbit, $harga, $diskon = 0;

    public function __construct($judul = "judul", $penulis = "penulis", 
        $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getDiskon() {
        return $this->diskon;
    }

    public function setJudul($judul) { 
        if (!is_string($judul)) {
            throw new Exception("Judul Harus String");
        }
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    abstract public function getIngfoProduk();

    public function getIngfo() {
        return "{$this->getJudul()} | {$this->getLabel()} (Rp. {$this->getHarga()})";
    }
}

class Komik extends Produk implements IngfoProduk {
    private $jmlhalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlhalaman) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlhalaman = $jmlhalaman;
    }

    public function getIngfoProduk() {                                                                                                                                                                                                  
        return "Komik : " . $this->getIngfo() . " - {$this->jmlhalaman} Halaman.";
    }
}

class Game extends Produk implements IngfoProduk {
    private $waktumain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktumain) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktumain = $waktumain;
    }

    public function getIngfo() {
        return "{$this->getJudul()} | {$this->getLabel()} (Rp. {$this->getHarga()})";
    }

    public function getIngfoProduk() {
        return "Game : " . $this->getIngfo() . " ~ {$this->waktumain} Jam.";
    }
}

class CetakIngfoProduk {
    public $daftarProduk = array();

    public function tambahProduk(Produk $produk) {
        $this->daftarProduk[] = $produk;
    }

    public function cetak() {
        $str = "Daftar Produk <br>";

        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getIngfoProduk()} <br>";
        }

        return $str;
    }
}

$produk3 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk4 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 450000, 50);

$cetakProduk = new CetakIngfoProduk();
$cetakProduk->tambahProduk($produk3);
$cetakProduk->tambahProduk($produk4);
echo $cetakProduk->cetak();