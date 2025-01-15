<!-- 
Tugas 3
Buatlah program yang dapat memeriksa apakah suatu angka adalah bilangan prima atau bukan
note : angka prima hanya dapat dibagi oleh 1 dan dirinya sendiri
contoh :
7 adalah bilangan prima
8 bukan bilangan prima 
-->

<?php
  $Prima = 10;
  $hasil = true;
  for ($p=2;$p<$Prima;$p++)
  if ($Prima % $p == 0)
  $hasil= false;
  echo  "$Prima<br>";
  echo $hasil ? "Ini Prima ya" : "Ini Bukan Prima ya";
?>