<?php
// pengulangan
// for
// while
// do... while
// foreach : pengulangan khusus array -->

// for ($i = 0; $i <5 $i++){
//     echo "hell world! <br>";
// }

// // while ( $i < 5 ){
//    // echo "hello world! <br>";
// $i++;
// }
// $i + 0;

// do{
//     echo "hello world <br>";
//     $i++;
// } while ( $i <5 );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lat 1</title>
    <style>
        background-color: silver;
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
            <?php for($i = 1; $i <= 5; $i++) : ?>
                <?php if ( $i %2 == 1) :?>
                <tr class="warna-baris">
                <?php else : ?>
                <tr>
                <?php endif?>
                    <?php for( $j = 1; $j <= 5; $j++) : ?>
                        <td><?= "$i, $j"; ?></td>
                        <?php endfor;  ?>
                    </tr>
                    <?php endfor;  ?>
                </table>
            /* // for ( $i = 1; $i <= 3; $i++ ){
            //     echo "<tr>";
            //     for ( $j = 1; $j <= 5; $j++ ){
            //         echo "<td>1,1</td>";
            //     }
            //     echo "</tr>";
            // }
            ?> */
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
            <td>1,5</td>
        </tr>
        <tr>
            <td>2,1</td>
            <td>2,2</td>
            <td>2,3</td>
            <td>2,4</td>
            <td>2,5</td>
        </tr>
    </table>
</body>
</html>

<?php
// pengkondisian / percabangan
// if else
// if else if else
// ternary
// switch

// $x = 10;
// if( $x < 20 ){
//     echo "benar";
// } else if( $x == 20 ){
//     echo "bingo";
// }
// else{    
//     echo "salah";
// }
?>