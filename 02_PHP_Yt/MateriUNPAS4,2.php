<?php
$mahasigma =[ ["Fadhil","0123849","Teknik Perpaduan Kecap", "Email"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumen Mahasigma</title>
</head>
<body>
    <h1>Daftar Mahasigma<h/1>

<ul> 
<?php foreach ($mahasigma as $mahabarata) : ?>
    <li><?php echo $mahabarata[0]; ?></li>
    <li><?php echo $mahabarata[1]; ?></li>
    <li><?php echo $mahabarata[2]; ?></li>
    <li><?php echo $mahabarata[3]; ?></li>
    <?php endforeach; ?>

<ul>
</body>
</html>