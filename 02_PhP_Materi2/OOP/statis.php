<?php

// class ContohStatic {
//     public static $angka = 1;

//     public static function halo() {
//         return "Hae " . self::$angka++ . " kali.";  
//      }
// }
// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();
 
class contoh {
    public static $angka = 1;

    public function halo() {
        return "Skrip Jawa " . self::$angka++ . " Kali. <br>";

    }
}

$Objek = new contoh;
echo $Objek->halo();
echo $Objek->halo();
echo $Objek->halo();
echo $Objek->halo();
echo $Objek->halo();
echo "<hr>";
$Objek2 = new contoh;
echo $Objek2->halo();