<?php
require 'Fungsi.php';
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

<h1>Daftar pengaduan</h1>
<a href="ngadu.php">Tambah pengaduan</a>
    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <td>Urutan pengaduan</td>
        
        <td>Korban</td>
        <td>Pelaku</td>
        <td>Alasan pengaduan</td>
        <td>Tanggal</td>
        <td>TKP</td>
    </tr>

    <?php $inc=1; ?>
    <?php  foreach ($Kendaraan as $Tankista) : ?>
     <tr>
     <td> <?= $inc++ ?></td> 
     <td><?= $Tankista["Varian"];?></td>
     <td><?= $Tankista["Persenjataan"];?></td>
     <td><?= $Tankista["Amunisi"];?></td>
     <td><?= $Tankista["Faksi"];?></td>
     <td><img src="Gambar/<?= $Tankista["Gambar"]; ?>"width=75></td>
    </tr>
    
    
    <?php endforeach; ?>
    </table>
</body>
</html>