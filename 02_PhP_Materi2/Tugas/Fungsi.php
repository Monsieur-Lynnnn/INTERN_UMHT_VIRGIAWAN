<?php
$database = mysqli_connect("localhost", "root", "", "Tank");

function query($query) {
    global $database;
    $result = mysqli_query($database, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $database;
    $Varian = htmlspecialchars($data["Varian"]);
    $Arms = htmlspecialchars($data["Persenjataan"]);
    $Amunisi = htmlspecialchars($data["Amunisi"]);
    $Faksi = htmlspecialchars($data["Faksi"]);

    
    $Gambar = upload();
    if (!$Gambar) {
        return false;
    }

    $kueri = "INSERT INTO deskripsi 
                VALUES ('', '$Varian', '$Arms', '$Amunisi', '$Faksi', '$Gambar')";
    mysqli_query($database, $kueri);

    return mysqli_affected_rows($database);
}

function hapus($id) {
    global $database;
    mysqli_query($database, "DELETE FROM deskripsi WHERE id = $id");
    return mysqli_affected_rows($database);
}

function upload() {
    if (!isset($_FILES['Gambar'])) {
        echo "<script>alert('File tidak ditemukan!');</script>";
        return false;
    }

    $file = $_FILES['Gambar']['name'];
    $size = $_FILES['Gambar']['size'];
    $error = $_FILES['Gambar']['error'];
    $temp = $_FILES['Gambar']['tmp_name'];

    if ($error === 4) {
        echo "<script>alert('Pilih gambar terlebih dahulu!');</script>";
        return false;
    }

   
    $extension = ['jpg', 'jpeg', 'webp', 'png'];
    $fileExt = strtolower(pathinfo($file, PATHINFO_EXTENSION));

    if (!in_array($fileExt, $extension)) {
        echo "<script>alert('Yang Anda upload bukan gambar yang valid!');</script>";
        return false;
    }

    
    if ($size > 100000000) {
        echo "<script>alert('Ukuran gambar terlalu besar! Maksimal 1MB.');</script>";
        return false;
    }

    
    $filebaru = uniqid() . "." . $fileExt;
    $Arah = __DIR__ . '/Gambar/' . $filebaru;

    
    if (move_uploaded_file($temp, $Arah)) {
        return $filebaru; 
    } else {
        echo "<script>alert('Gagal mengupload gambar!');</script>";
        return false;
    }
}
?>
