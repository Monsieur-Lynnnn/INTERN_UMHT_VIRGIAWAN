<?php
class Produk {
    private $judul, $penulis, $penerbit, $harga, $diskon = 0; 
    
    public function __construct($judul = "judul", $penulis = "penulis", 
        $penerbit = "penerbit", $harga = 0 ) {
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

    public function setJudul( $judul ) { 
        if( !is_string($judul) ) {
            throw new Exception("Judul Harus String");
        }
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setHarga( $harga ) {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
    
    public function setPenulis( $penulis ) {
        $this->penulis = $penulis;
    }
    
    public function getPenulis() {
        return $this->penulis;
    }
    
    public function setPenerbit( $penerbit ) {
        $this->penerbit = $penerbit;
    }
    
    public function getPenerbit() {
        return $this->penerbit;
    }
    
    public function getIngfoProduk() {
        $str = "{$this->getJudul()} | {$this->getLabel()} (Rp. {$this->getHarga()})";
        return $str;
    }
}

class Komik extends Produk {
    public $jmlhalaman;
    
    public function __construct($judul, $penulis, $penerbit, $harga, $jmlhalaman) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlhalaman = $jmlhalaman;
    }
    
    public function getIngfoProduk() {
        $str = "Komik : " . parent::getIngfoProduk() . " - {$this->jmlhalaman} Halaman.";
        return $str; 
    }
}

class Game extends Produk {
    public $waktumain;
    
    public function __construct($judul, $penulis, $penerbit, $harga, $waktumain) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktumain = $waktumain;
    }
    
    public function getIngfoProduk() {
        $str = "Game : " . parent::getIngfoProduk() . " ~ {$this->waktumain} Jam.";
        return $str; 
    }
}

class CetakIngfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->getJudul()} | {$produk->getLabel()} (Rp. {$produk->getHarga()})";
        return $str;
    }
}

// Membuat objek
$produk3 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk4 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 450000, 50);

echo $produk3->getIngfoProduk();
echo "<br>";
echo $produk4->getIngfoProduk();
echo "<hr>";

// Menerapkan diskon pada game
$produk4->setDiskon(60);
echo "Harga setelah diskon: Rp. " . $produk4->getHarga();
echo "<hr>";

$produk3->setPenulis("Fadhil ganteng sikma skibidi");
echo $produk3->getPenulis();