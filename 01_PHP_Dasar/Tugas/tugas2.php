<!-- 
Tugas 2
Buatlah array yang berisikan nilai siswa (contoh : [80,75,45,65,70])
Lalu lakukan perulangan untuk mencetak nilai siswa tersebut :
"Lulus" jika nilai >= 60
"Tidak Lulus" jika nilai < 60
Contoh :
"nilai anda" adalah 69, mohon maaf anda belum lulus"
"nilai anda adalah 75, selamat anda sudah lulus" 
-->

<?php
  $arrays = [100,90,80,75,74,59,30,0.5];  
  foreach ($arrays as $array){
     if ($array >74){
        echo "Alamak Kamu lulus ygy, Nilai mu adalah $array<br>";
     } else{
        echo "Astaga naga demi kobo, Kamu gak lulus, Nilaimu adalah $array<br>";
     }
  }
  
?>