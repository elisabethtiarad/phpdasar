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
    <title>GET</title>
</head>

<body>
    <h1>Daftar mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>

        <li>
            <a
                href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&prodi=<?= $mhs["prodi"]; ?>&email=<?= $mhs["email"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"];  ?>
            </a>
        </li>

        <?php endforeach;  ?>
    </ul>

</body>

</html>