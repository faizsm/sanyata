<?php
require '../function/function_guru.php';
$id=$_GET["id"];
if (hapus_guru($id)>0){
    echo"
    <script>
    alert('Data Berhasil Dihapus');
    document.location.href='guru.php';
    </script>
    ";
}else{
    echo"
    <script>
    alert('Data Gagal Dihapus');
    document.location.href='guru.php';
    </script>
    ";
}
?>