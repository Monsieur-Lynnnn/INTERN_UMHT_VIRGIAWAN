<!--  
  Tugas 1 (wajib hari ini selesai !!!)
  Buatlah program yang dapat mencetak angka 1 - 20
  Tentukan apakah setiap angka tersebut ganjil atau genap
  contoh :
  1 adalah Ganjil
  2 adalah Genap
  3 adalah Ganjil
  dst 
-->

<?php
  for ($Gry=1; $Gry <=20; $Gry++){

    if ($Gry % 2 == 0){
        echo $Gry . "Genap <br>";
    } else {
        echo $Gry . "Ganjil<br>";
    }
}
?>