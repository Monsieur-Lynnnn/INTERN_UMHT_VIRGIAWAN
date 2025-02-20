<?php
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
?>