<!-- <?php
// array
//cara lama
$bulan= array("Skibidi","Hawk");
//cara baru
$Bulan=["Januari","Februari","Maret",];
//Bisa memakai tipe data yang beda
$arr1=[123, "string", true];

print_r($bulan);
echo"<br>";
print_r($Bulan);
echo "<br>";
echo $arr1[0] ;
echo "<br>";
echo $Bulan[1]; 

//elemen baru
print_r($Bulan);
$Bulan[]="April";
echo "<br>";
print_r($Bulan)
?> -->

<?php
$NilaiDes=[12,56,67,78,89,90];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2</title>
    <style>
/* .kotak {
    width: 50px;
    height: 50px;
    background-color: grey;
    text-align: center;
    line-height: 50px;
    margin: 4px;
    float: Left;
    transition: rotate (360deg);
}
.clear { clear: both; }
</style>
</head>
<body>
<?php for($inc = 0; $inc < count($NilaiDes); $inc++ ) { ?>
<div class="kotak"><?php echo $NilaiDes[$inc]; ?></div>
<?php } ?>
<div class="clear"></div>
<?php foreach($NilaiDes as $Nilai) { ?>
    <div class="kotak"><?php echo $Nilai ?></div>
    <?php } ?>
    <div class="clear"></div>
    <?php foreach($NilaiDes as $Nilai) : ?>
   <div><?php=$Nilai; ?></div>
   <?php endforeach;?> */



</body>
</html>


