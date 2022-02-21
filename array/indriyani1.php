<?php
//array multidimensi
    $mahasiswa = [
        ["Abdul Rahman", "12345", "Informatika", "abdulrahman@ft.unbara.ac.id"],
        ["indri", "1256435", "Informatika", "indri@ft.unbara.ac.id"] 
    ];
        var_dump($mahasiswa);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>nama : <?= $mhs[0]; ?></li>
            <li>NPM : <?= $mhs[1]; ?></li>
            <li>jurusan : <?= $mhs[2]; ?></li>
            <li>email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
    
    
</body>
</html>
