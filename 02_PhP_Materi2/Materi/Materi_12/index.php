<?php
require 'functions.php';
$Kendaraan = query("SELECT * FROM deskripsi");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>

<h1>Daftar Tank</h1>
<a href="tambah.php">Tambah</a>
    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <td>Urutan</td>
        <td>Aksi</td>
        <td>Varian</td>
        <td>Armaments</td>
        <td>Amunisi</td>
        <td>Faksi</td>
        <td>Gambar</td>
    </tr>

    <?php $inc=1; ?>
    <?php  foreach ($Kendaraan as $Tankista) : ?>
     <tr>
     <td> <?= $inc++ ?></td> 
     <td><a href="">Edit</a>
     <a href="Delete.php?id=<?= $Tankista["id"];?>">Delete</a></td>
     <td><?= $Tankista["Varian"];?></td>
     <td><?= $Tankista["Persenjataan"];?></td>
     <td><?= $Tankista["Amunisi"];?></td>
     <td><?= $Tankista["Faksi"];?></td>
     <td><img src="img/<?= $Tankista["Gambar"]; ?>"width=75></td>
    </tr>
    
    
    <?php endforeach; ?>
    </table>
</body>
</html>