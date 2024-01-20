<?php
require '../function/function_guru.php';
if(isset($_POST["submit"])){
    if(tambah_guru($_POST)>0){
        echo"
        <script>
            alert('data berhasil ditambah');
            document.location.href = 'guru.php';
        </script>";

    }else{
        echo"
        <script>
            alert('data gagal ditambahkan');
            document.location.href = 'guru.php';
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Tambah Data Guru</title>
</head>
<body>
    <h1>Tambah Data Guru</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="ma" id="nama" required>
            </li>
            <li>
                <label for="mapel">Mata_pelajaran :</label>
                <input type="text" name="mata" id="mata" required>
            </li>
            <li>
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" id="alamat" required>
            </li>
            <li>
                <label for="ijazah">Ijazah :</label>
                <input type="text" name="ijazah" id="ijazah" required>
            </li> 
            <li>
                <label for="no_telpon">No Telepon :</label>
                <input type="text" name="no" id="no" required>
            </li>
            <li><button type="submit" name="submit">Tambah</button></li>
        </ul>
    </form>    
</body>
</html>