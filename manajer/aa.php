<?php
session_start();
$level = $_SESSION['level'];
$nama = $_SESSION['nama'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Wilayah RI</title>
    <link href="asset/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <script src="asset/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Wilayah RI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        <?php
        if($level=="admin"){?>
        <a class="nav-link" href="petugas.php">Petugas</a>
        <a class="nav-link" href="spp.php">Spp</a>
        <a class="nav-link" href="kelas.php">kelas</a>
        <a class="nav-link" href="siswa.php">siswa</a>
        <?php
        }if($level!="siswa"){?>
            <a class="nav-link" href="pembayaran.php">pembayaran</a>
        <?php
        }
        if($level=="admin"){?>
            <a class="nav-link" href="laporan.php">Laporan</a>
            <?php
        }?>
                <a class="nav-link" href="logout.php">Logouts</a>
      </div>
    </div>
  </div>
</nav>
  </body>
</html>