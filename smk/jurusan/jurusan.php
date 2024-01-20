<?php
require "../koneksi.php";
require "../function/function_jurusan.php";
$jurusan=query("SELECT*FROM jurusan");
if (isset($_POST["cari"])){
  $jurusan=cari_jurusan($_POST["keyword"]);
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
  <h1>Selamat Datang</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Master Data
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="../jurusan/jurusan.php">Data Jurusan</a></li>
            <li><a class="dropdown-item" href="../sekolah/sekolah.php">Data Sekolah</a></li>
          </ul>
          <li class="nav-item">
          <a class="nav-link active" href="../siswa/siswa.php">Data Siswa</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
<a class="btn mt-3 mb-3  btn-dark" href="tambah_jurusan.php" role="button">Tambah Data Jurusan</a>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex" action="" method="post">
      <input class="form-control me-2" type="text" name="keyword" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit" name="cari">Search</button>
    </form>
  </div>
</nav>

<table  class="table table-dark table-striped">
  <thead>
      <?php $i = 1; ?>
    <tr class="table-dark">
      <th scope="col">Id Jurusan</th>
      <th scope="col">Nama_jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <?php foreach ($jurusan as $s): ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?= $s ["Nama_jurusan"]; ?></td>
        <td><a class="btn btn-primary" href="ubah_jurusan.php?id=<?=$s["id_jurusan"];?>" role="button">Ubah</a>
            <a class="btn btn-primary" href="hapus_jurusan.php?id=<?=$s["id_jurusan"];?>" role="button">Hapus</a></td>
    </td>
  </tbody>
    <?php $i++; ?> 
    <?php endforeach;?>
</table>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../asset/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>