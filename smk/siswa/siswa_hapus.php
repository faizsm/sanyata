<?php
require '../function/function_siswa.php';
$id=$_GET["id"];
if (hapus_siswa($id)>0){
    echo"
    <script>
    alert('Data Berhasil Dihapus');
    document.location.href='siswa.php';
    </script>
    ";
}else{
    echo"
    <script>
    alert('Data Gagal Dihapus');
    document.location.href='siswa.php';
    </script>
    ";
}
?>