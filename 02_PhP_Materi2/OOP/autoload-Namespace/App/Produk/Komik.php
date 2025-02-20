<?php

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
?>