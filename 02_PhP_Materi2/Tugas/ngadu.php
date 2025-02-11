<?php 


require 'Fungsi.php';


if ( isset ($_POST["Submit"] ) ) {

    if ( tambah ($_POST) > 0 ) {
        echo "
               <script>
                alert('Data berhasil Diinput') 
                document.location.href = 'index.php'
               </script>";
    } else {
        echo "
        <script>
        alert('Data tidak berhasil diinput')
        document.location.href = 'index.php'
        </script>";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambahan data </title>
</head>
<body>
    <h1>Tambahan Data Kendaraan</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            
            <li>
                <label for="Varian">korban:</label>
                <input type="text" name="Varian" id="Varian">
            </li>
            <li>
            <label for="Persenjataan">Pelaku:</label>
            <input type="text" name="Persenjataan" id="Persenjataan">
            </li>
            <li>
            <label for="Amunisi">alasan:</label>
            <input type="text" name="Amunisi" id="Amunisi">
            </li>
            <li>
            <label for="Faksi">tanggal:</label>
            <input type="Date" name="Faksi" id="Faksi">
            </li>
            <li>
            <label for="Gambar">foto ktp:</label>
            <input type="file" name="Gambar" id="Gambar">
            </li>
            <li>
                <button type= "Submit" name="Submit">Tambahkan Aduan!</button>
            </li>
        </ul>
    
    </form>


</body>
</html>