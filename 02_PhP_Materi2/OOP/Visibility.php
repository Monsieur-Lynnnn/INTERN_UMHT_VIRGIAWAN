<?php
class Produk {
    public $judul, $penulis, $penerbit; 
    Private $diskon = 0; 
    Private $harga;
    
    public function __construct($judul = "judul", $penulis = "penulis", 
    $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
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
    public $jmlhalaman;
    public function __construct($judul = "judul", $penulis = "penulis", 
    $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0){
    
   parent::__construct($judul, $penulis, 
   $penerbit, $harga );

   $this->jmlhalaman = $jmlhalaman;
    
    }
    public function getIngfoProduk() {
        $str = "Komik : " . parent::getIngfoProduk() . " - {$this->jmlhalaman} Halaman.";
        return $str; 
    }
}

class Game extends Produk {
    public $waktumain;
    public function __construct($judul = "judul", $penulis = "penulis", 
    $penerbit = "penerbit", $harga = 0, $waktumain = 0){
        parent::__construct($judul, $penulis, 
        $penerbit, $harga );
        $this->waktumain = $waktumain;
    }
    
    
    public function getIngfoProduk() {
        $str = "Game : " . parent::getIngfoProduk() . " ~ {$this->waktumain} Jam.";
        return $str; 
    }
}

class CetakIngfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk3 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk4 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 450000, 50);


echo $produk3->getIngfoProduk();
echo "<br>";
echo $produk4->getIngfoProduk();
echo "<hr>";

$produk4->setDiskon(60);
echo $produk4->getHarga();
