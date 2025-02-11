<?php 


require 'functions.php';

$id = $_GET["id"];
$skunk = query("SELECT * FROM deskripsi WHERE id = $id");



if ( isset ($_POST["Submit"] ) ) {

    if ( tambah ($_POST) > 0 ) {
        echo "
               <script>
                alert('Data berhasil diubah') 
                document.location.href = 'index.php'
               </script>";
    } else {
        echo "
        <script>
        alert('Data tidak berhasil diubah')
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
    <h1>Mengubah data Kendaraan</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            
            <li>
                <label for="Varian">Varian:</label>
                <input type="text" name="Varian" id="Varian" required value="<?= $id["Varian"]; ?>">
            </li>
            <li>
            <label for="Persenjataan">Persenjataan:</label>
            <input type="text" name="Persenjataan" id="Persenjataan" required value="<?= $id["Persenjataan"]; ?>">
            </li>
            <li>
            <label for="Amunisi">Tipe Amunisi:</label>
            <input type="text" name="Amunisi" id="Amunisi" required value="<?= $id["Amunisi"]; ?>">
            </li>
            <li>
            <label for="Faksi">Faksi:</label>
            <input type="text" name="Faksi" id="Faksi" required value="<?= $id["Faksi"]; ?>">
            </li>
            <li>
            <label for="Gambar">Gambar:</label>
            <input type="text" name="Gambar" id="Gambar" required value="<?= $id["Gambar"]; ?>" >
            </li>
            <li>
                <button type= "Submit" name="Submit">Update Kendaraan!</button>
            </li>
        </ul>
    
    </form>


</body>
</html>