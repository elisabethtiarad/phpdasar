<?php
$mahasiswa = [
    [
        "nama" => "Elisabeth Tiara",
        "nim" => "205314143",
        "prodi" => "Informatika",
        "email" => "elisabethtiarad@gmail.com",
        "gambar" => "elitiara.jpeg"
    ],
    [
        "nama" => "ETiaraeli",
        "nim" => "205314144",
        "prodi" => "Teknik Kimia",
        "email" => "tiaraeli@gmail.com",
        "gambar" => "muel.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>" alt="">
        </li>
        <li>Nama : <?= $mhs["nama"];  ?></li>
        <li>NIM : <?= $mhs["nim"];  ?></li>
        <li>Prodi : <?= $mhs["prodi"];  ?></li>
        <li>Email : <?= $mhs["email"];  ?></li>
    </ul>
    <?php endforeach;  ?>

</body>

</html>