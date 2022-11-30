<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
//koneksi ke database

require 'functions.php'; //memanggil file function
$mahasiswa = query("SELECT * FROM mahasiswa ");
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <a href="logout.php">Logout</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br>
    <form action="" method="post">
        <input type="text" name="keyword" size="40px" autofocus placeholder="Masukan keyword pencarian"
            autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Email</th>

        </tr>
        <?php $i = 1; ?>

        <?php foreach ($mahasiswa as $row) : ?>

        <tr>
            <td><?= $i;   ?>
            </td>
            <td><a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> | <a href="hapus.php?id=<?= $row["id"]; ?>"
                    onclick="return confirm ('Apakah Yakin menghapus?')">Hapus</a></td>

            <td><img src="img/<?= $row["gambar"]; ?>" width="50" alt=""></td>
            <td><?= $row["nim"]; ?> </td>
            <td><?= $row["nama"]; ?> </td>
            <td><?= $row["jurusan"]; ?> </td>
            <td><?= $row["email"]; ?></td>
        </tr>
        <?php $i++;  ?>

        <?php endforeach;  ?>

    </table>
</body>

</html>