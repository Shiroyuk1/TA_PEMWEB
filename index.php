<?php
// require 'function.php';

// $mahasiswa = query("SELECT * FROM mahasiswa");

// // tombil cari ditekan
// if (isset($_POST["cari"])) {
//     $mahasiswa = cari($_POST["keyword"]);
// }


// Ambil data dari tabel mahasiswa / query data mahasiswa
// mysqli_query($conn,)
// mysql_query($conn, "SELECT * FROM 	mahasiswa");  (menggunakan query)
// note = kalau pakek query true / false ndak ada notifikasi ! HARUS DIAKALI menggunkan if(!$result){echo mysqli_eror($conn);}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- judul web -->
    <title>Halaman Admin</title>

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- javascript -->
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/script.js"></script>
</head>

<body class="bg-body">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">Institut Tekonologi Kyoto</a>
        </div>
    </nav>
    
    <h1>Halo</h1>

    <!-- Main -->
    <a href="indes.php" class="text-decoration-none">
        <button type="button" class="btn btn-primary">Data Mahasiswa</button>
    </a>
    <a href="inded.php" class="text-decoration-none">
        <button type="button" class="btn btn-primary">Data Dosen</button>
    </a>

    <button type="button" class="btn btn-secondary">Secondary</button>
    <button type="button" class="btn btn-secondary">Secondary</button>
    <!-- Javascript boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>