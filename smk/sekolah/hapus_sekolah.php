<?php
require '../function/function_sekolah.php';
$id=$_GET["id"];
if (hapus_sekolah($id)>0){
    echo"
    <script>
    alert('Data Berhasil Dihapus');
    document.location.href='sekolah.php';
    </script>
    ";
}else{
    echo"
    <script>
    alert('Data Gagal Dihapus');
    document.location.href='sekolah.php';
    </script>
    ";
}
?>