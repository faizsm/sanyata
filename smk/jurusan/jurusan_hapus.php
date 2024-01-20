<?php
require '../function/function_jurusan.php';
$id=$_GET["id"];
if (hapus_jurusan($id)>0){
    echo"
    <script>
    alert('Data Berhasil Dihapus');
    document.location.href='jurusan.php';
    </script>
    ";
}else{
    echo"
    <script>
    alert('Data Gagal Dihapus');
    document.location.href='jurusan.php';
    </script>
    ";
}
?>