<?php 


require 'functions.php';


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

    <form action="" method="post">
        <ul>
            
            <li>
                <label for="Varian">Varian:</label>
                <input type="text" name="Varian" id="Varian">
            </li>
            <li>
            <label for="Persenjataan">Persenjataan:</label>
            <input type="text" name="Persenjataan" id="Persenjataan">
            </li>
            <li>
            <label for="Amunisi">Tipe Amunisi:</label>
            <input type="text" name="Amunisi" id="Amunisi">
            </li>
            <li>
            <label for="Faksi">Faksi:</label>
            <input type="text" name="Faksi" id="Faksi">
            </li>
            <li>
            <label for="Gambar">Gambar:</label>
            <input type="text" name="Gambar" id="Gambar">
            </li>
            <li>
                <button type= "Submit" name="Submit">Tambahkan Kendaraan!</button>
            </li>
        </ul>
    
    </form>


</body>
</html>