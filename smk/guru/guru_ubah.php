<?php
require '../function/function_guru.php';
$sis =id_guru($_GET["id"]);
if (isset($_POST["submit"])){
if (ubah_guru($_POST)>0){
    echo"
    <script>
    alert('Data Berhasil Dirubah');
    document.location.href='guru.php';
    </script>
    ";
}else{
    echo "
    <script>
    alert ('Data Gagal Dirubah');
    document.location.href='guru.php';
    </script>
    ";
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah data guru</title>
</head>
<body>
    <h1>Ubah Data Guru</h1>
    <form action="" method="post">
        <ul>    
         <input type="hidden" name= "id" value="<?=$sis ["id_guru"];?>">
         <li>
                <label for="nama">Nama :</label>
                <input type="text" name="ma" id="nama" required value ="<?=$sis ["nama"];?>">
            </li>
            <li>
                <label for="mata">Mata_pelajaran :</label>
                <input type="text" name="mata" id="mata" required value ="<?=$sis ["mata_pelajaran"];?>">
            </li>
            <li>
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" id="alamat" required value ="<?=$sis ["alamat"];?>">
            </li>
            <li>
                <label for="ijazah">Ijazah :</label>
                <input type="text" name="ijazah" id="ijazah" required value ="<?=$sis ["ijazah"];?>">
            </li>
            <li>
                <label for="no_telpon">No Telepon :</label>
                <input type="text" name="no" id="no" required value ="<?=$sis ["no_telp"];?>">
            </li>
                <button type="submit" name="submit">
                    UBAH DATA
                </button>
            </li>
        </ul>
    </form>
</body>
</html>
