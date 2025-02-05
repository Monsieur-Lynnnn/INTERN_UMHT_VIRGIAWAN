<?php
$database = mysqli_connect("localhost", "root","", "Tank");


function query ($query) {
    global $database;
    $result = mysqli_query($database, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result ) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $database;
    $Varian = $data["Varian"];
  $Arms = $data["Persenjataan"];
  $Amunisi = $data["Amunisi"];
  $Faksi = $data["Faksi"];
  $Gambar = $data["Gambar"];

  $query = "INSERT INTO deskripsi VALUES ('', '$Varian', '$Arms', '$Amunisi', '$Faksi', '$Gambar')";
  mysqli_query ($database, $query);
  return mysqli_affected_rows($database);
}
?>