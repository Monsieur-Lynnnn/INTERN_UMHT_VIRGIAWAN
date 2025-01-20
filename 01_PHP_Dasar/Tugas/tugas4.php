 <!-- 
Tugas 4
 Buatlah program untuk menghitung volume dari prisma segitiga dengan menentukan nilai awal
 Contoh :
 a = 5
 b = 3
 t = 10
 volume dari prisma segitiga adalah ... cm 
 -->

 <?php
  function HitungVolume($a,$b,$t){
    $Alass= 0.5*$a*$b;
    $Volume= $Alass*$t;
    
    return $Volume;
}


$Volume=HitungVolume(15,5,16);
echo "Volume Prisma segitiga adalah $Volume cm <br>";
?>
