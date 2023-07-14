<?php
require 'functionDosen/function.php';

// // koneksi Database
// $conn = mysqli_connect("localhost", "root", "", "phpdasar");
if (isset($_POST["submit"])) {
    // cek apakah data berhasil ditambah atau ngga
    if (tambah($_POST) > 0) {
        // echo "Data Ditambah";
        echo "
            <script>
                alert('Data Berhasil ditambah');
                document.location.href = 'inded.php';
            </script>
        ";
    } else {
        // echo "Data Gagal Tambah";
        echo "
            <script>
                alert('Data Gagal ditambah');
                document.location.href = 'inded.php';
            </script>
        ";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <h1>Tambah Data</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nid">NID : </label>
                <input type="text" name="nid" id="nid" required>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="prodi">Prodi : </label>
                <input type="text" name="prodi" id="prodi">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="pendidikan">Pendidikan : </label>
                <input type="text" name="pendidikan" id="pendidikan">
            </li>
            <li>
                <label for="gambar">gambar : </label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>