<?php
require "../koneksi.php";
require "../function/function_guru.php";
$guru=query("SELECT*FROM guru");
if (isset($_POST["cari"])){
    $guru=cari_guru($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Guru </title>
</head>
<body>
    <h1>Data Guru</h1><br>
    <a href="tambah_guru.php">Tambah Data Guru</a><br><br>
    <form action=""method="post">
        <input type="text" name="keyword"size="25" placeholder="masukan keyword" >
        <button type="submit" name="cari"> Cari </button>
</form><br>
    <table border="1">
        <?php $i = 1; ?>
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Mapel</th>
            <th>Alamat</th>
            <th>Ijazah</th>
            <th>No.telpon</th>
            <th>Aksi</th>
        </tr>
    <?php foreach ($guru as $s):?>
    <tr>
        <td align="center"><?php echo $i; ?></td>
        <td><?= $s ["nama"]; ?></td>
        <td><?= $s ["mata_pelajaran"]; ?></td>
        <td><?= $s ["alamat"]; ?></td>
        <td><?= $s ["ijazah"]; ?></td>
        <td><?= $s ["no_telp"]; ?></td>
        <td> <a href="guru_ubah.php?id=<?=$s["id_guru"];?>">UBAH</a> |
         <a href="guru_hapus.php?id=<?=$s["id_guru"];?>">Hapus</a>
    </td>
    </td>
    </tr>
    <?php $i++; ?> 
    <?php endforeach;?>
    </table>
</body>
</html> 