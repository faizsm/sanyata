<?php
require "../koneksi.php";
require "../wilayah/proses_wilayah.php";
$provinsi=query("SELECT*FROM provinces");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wilayah</title>
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <div class="container-fluid">
<script src="../asset/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <h1 align="center">Selamat Datang</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../home.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

</nav>
<div class="container-fluid">
    <br>
<table  class="table table-dark table-striped">
  <thead>
      <?php $i = 1; ?>
    <tr class="table-dark">
      <th scope="col">No</th>
      <th scope="col">Nama Provinsi</th>
    </tr>
  </thead>
  <?php foreach ($provinsi as $s): ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?= $s ["prov_name"]; ?></td>
    </td>
  </tbody>
    <?php $i++; ?> 
    <?php endforeach;?>
</table>
</div>