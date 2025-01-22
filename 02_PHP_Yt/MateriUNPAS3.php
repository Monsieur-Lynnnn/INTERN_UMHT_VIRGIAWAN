<?php
// echo date("L");
// echo date ("l, d-M-Y<br>");

// Unix timestamp
// echo time();
// echo date("l", time()+60*60*24*1201);\
// echo date("l, d M Y", mktime(0,0,0, 8, 17, 1945));
// echo date("l", strtotime("17 Aug 1945"));
function salam($Waktu, $nama) {
    return "Selamat $Waktu dan Selamat datang $nama";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Function</title>
</head>
<body>
    <h1><?php echo salam("Pagiii", "Virgiawan") ?></h1>
</body>
</html>