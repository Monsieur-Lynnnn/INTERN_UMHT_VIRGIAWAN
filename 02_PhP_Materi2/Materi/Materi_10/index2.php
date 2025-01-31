<?php
$database = mysqli_connect("localhost", "root","", "Tank");
$result = mysqli_query($database, "SELECT * FROM deskripsi");

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
    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <td>Urutan</td>
        <td>Aksi</td>
        <td>Gambar</td>
        <td>Varian</td>
        <td>Armaments</td>
        <td>Amunisi</td>
        <td>Faksi</td>
    </tr>

    <td><?php $inc = 1; ?></td>
    <?php while ( $Tankista=mysqli_fetch_assoc($result) ) : ?>
     <tr>
     <td> <?= $inc; ?></td> 
     <td><a href="">Edit</a>
     <a href="">Delete</a></td>
     <td><img src="img/<?= $Tankista["Gambar"] ?>"width=75></td>
        <td><?= $Tankista["Varian"];?></td>
        <td><?= $Tankista["Persenjataan"];?></td>
        <td><?= $Tankista["Amunisi"];?></td>
        <td><?= $Tankista["Faksi"];?></td>
    </tr>
    
    <?=  $inc++; ?>
    <?php endwhile; ?>
    </table>
</body>
</html>