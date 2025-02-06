<?php 
require 'functions.php';
// cek apakah tombol submit sudah di tekan atau belum
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php'
        </script>
        ";
    } else {
        echo "
         <script>
        alert('data gagal ditambahkan');
        document.location.href = 'index.php'
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa </title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post">

    <ul>
        <li>
            <label for="Varian">Varian:</label>
            <input type="text" name="Varian" id="Varian"
            required>
        </li>
        <li>
            <label for="Armaments">Armaments:</label>
            <input type="text" name="Armaments" id="Armaments"
            required>
        </li>
        <li>
            <label for="Amunisi">Amunisi:</label>
            <input type="text" name="Amunisi" id="Amunisi"
            required>
        </li>
        <li>
            <label for="Faksi">Faksi:</label>
            <input type="text" name="Faksi" id="Faksi"
            required>
        </li>
        <li>
            <label for="Gambar">Gambar:</label>
            <input type="text" name="Gambar" id="Gambar"
            required>
        </li>
        <br>
        <li>
            <button typr="submit" name="submit">Tambah data</button>
        </li>
    </ul>
    </form>
</body>
</html>