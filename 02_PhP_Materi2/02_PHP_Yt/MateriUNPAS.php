<?php
// Ini adalah Komentar
// ini juga komnetar
/* ini adalah komentator*/
//  Shortcut Ctrl + Slash
// Testing
// aku nak
// Dan aku ingin

// Pertemuan 2 dasar PHP
// Sintaks php

// standar output
// Echo, Print
// Print_r
// Var_dump

echo "E-100<br>";  
print "Maus<br>";
print_r("Wunderwaffen<br>");
var_dump ("Messchersmith ME 262 <br>");
$Nama="Nathan";
$Sambung="Virgiawan";

// output angka
echo 6281388477180

/* Penggunaan Kutip tergantung kata kata yang ada di dalam String */

// Sintaks PHP didalam HTML dan sebaliknya
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Halo Selamat datang mas <?php echo "$Nama"; ?> <h1>
            <?php echo "<h1> halo nama saya skibidi </h1>"; ?>
            <p> <?php var_dump ("$Nama"); ?></p>
    </body>
    </html>

    <?php
    // Operator Aritmatika
    // + - * / %

    // Menggabungkan String
    echo $Nama . " " . $Sambung;

    // Assignment
    // =, +=, -=, *=, /=, %=, .=,

    $nigha="<br>Raffael";
    $nigha.=" ";
    $nigha.="Budiarto";

    echo "$nigha";
    // Perbandingan
    // <, >, <=, >=, ==
    var_dump (1== "1");

    // Identitas 
    // === !==
    var_dump (1=== "1");

    
    // Logika
    // &&, ||, !
    $x= 30; 
    var_dump($x < 20 || $x % 2 == 0);

    ?>
