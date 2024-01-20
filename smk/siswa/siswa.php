<?php
require "../koneksi.php";
require "../function/function_siswa.php";
$siswa=query("SELECT 
                      a.id,
                      a.nisn,
                      a.foto,
                      a.nama,
                      a.jenis_kelamin,
                      b.Nama_jurusan,
                      c.nama_sekolah
                      FROM siswa AS a JOIN jurusan AS b ON a.id_jurusan = b.id_jurusan
                      JOIN sekolah AS c ON a.id_sekolah = c.id_sekolah");
                    
if (isset($_POST["cari"])){
    $siswa=cari_siswa($_POST["keyword"]);
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
<a class="btn mt-3 mb-3  btn-dark" href="tambah_siswa.php" role="button">Tambah Data Siswa</a>
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
      <th scope="col">No</th>
      <th scope="col">Nisn</th>
      <th scope="col">Foto</th>
      <th scope="col">nama</th>
      <th scope="col">jenis kelamin</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Sekolah</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <?php foreach ($siswa as $s): ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?= $s ["nisn"]; ?></td>
      <td><img src="../asset/img/<?php echo $s['foto'] ?>" width="150" height="150"></td>
        <td><?= $s ["nama"]; ?></td>
        <td><?= $s ["jenis_kelamin"]; ?></td>
        <td><?= $s ["Nama_jurusan"];?></td>
        <td><?= $s ["nama_sekolah"];?></td>
        <td><a class="btn btn-primary" href="ubah_siswa.php?id=<?=$s["id"];?>" role="button">Ubah</a>
            <a class="btn btn-primary" href="siswa_hapus.php?id=<?=$s["id"];?>" role="button">Hapus</a></td>
    </td>
  </tbody>
    <?php $i++; ?> 
    <?php endforeach;?>
</table>
</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../asset/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>