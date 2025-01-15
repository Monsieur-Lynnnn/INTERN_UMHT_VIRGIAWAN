<!-- 
Tugas 5
Buatlah program berdasarkan materi yang sudah diberikan, minimal menggunakan 2 kombinasi materi 
-->

<?php
   for ($hari = 1;$hari<=7; $hari++){
      echo "Hari ke- $hari adalah-";
  
  switch ($hari){
      case 1:
          echo "Senin<br>";
          break;
      case 2;
           echo "Selasa<br>";
           break;
           case 3;
           echo "Rabu<br>";
           break;
           case 4;
           echo "Kamis<br>";
           break;
           case 5;
           echo "Jum'at<br>";
           break;
           case 6;
           echo "Sabtu<br>";
           break;
           case 7;
           echo "Minggu<br>";
           break;
           default;
           echo "Tidak valid <br>";
          }
      }
?>