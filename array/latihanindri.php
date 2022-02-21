<?php
    $mahasiswa = ["Abdul Rahman", "12345", "Informatika", "abdulrahman@ft.unbara.ac.id"];
        var_dump($mahasiswa);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Tugas pada php</title>
</head>

<body>
    <?php for ($i = 0; $i < 4; $i++) { ?>
        <li>
            <?php echo $mahasiswa[$i]; ?>
         </li>
    <?php } ?>

    <hr>

<?php foreach ($mahasiswa as $m) : ?>
    <li>
        <?= $m; ?>
    </li>
<?php endforeach; ?>

</body>
</html>

    
</body>
</html>