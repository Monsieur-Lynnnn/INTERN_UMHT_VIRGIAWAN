<?php
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