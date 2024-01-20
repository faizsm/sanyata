<?php
require '../function/function_siswa.php';
if(isset($_POST["submit"])){
    if(tambah_siswa($_POST)>0){
        echo"
        <script>
            alert('data berhasil ditambah');
            document.location.href = 'siswa.php';
        </script>";

    }else{
        echo"
        <script>
            alert('data gagal ditambahkan');
            document.location.href = 'siswa.php';
            </script>";
    }
}
$jurusan=query("SELECT*FROM jurusan");
$sekolah=query("SELECT*FROM sekolah");
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
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
<h1>Tambah Data Siswa</h1>
<form action="" method="post" enctype="multipart/form-data">
<div class="form-floating mb-3">
  <input type="text" class="form-control" name= "nisn"id="nisn" placeholder="nisn">
  <label for="nisn">NISN</label>
</div>
<div class=" mb-3">
<label for="formFile"  class="form-label">Tambahkan Foto</label>
  <input class="form-control" type="file" name="foto" id="formFile">
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control"  name= "nama"id="nama" placeholder="nama">
  <label for="nama">NAMA</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control"  name= "jenis_kelamin"id="jenis_kelamin" placeholder="jenis_kelamin">
  <label for="jenis_kelamin">JENIS KELAMIN</label>
</div>
<select class="form-select" aria-label="Default select example" name="jurusan" id="jurusan">
<option selected>Pilih Jurusan</option>
<?php foreach ($jurusan as $s): ?>
  <option value="<?= $s ["id_jurusan"]; ?>"><?= $s ["Nama_jurusan"]; ?></option>
  <?php endforeach;?>
</select>
<br>
<select class="form-select" aria-label="Default select example" name="sekolah" id="sekolah">
  <option selected>Asal Sekolah</option>
  <?php foreach ($sekolah as $s): ?>
    <option value="<?= $s ["id_sekolah"]; ?>"><?= $s ["nama_sekolah"]; ?></option>
  <?php endforeach;?>
</select><br>
<button type="submit" name="submit" class="btn btn-outline-dark">Tambah Data</button>
</form>
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