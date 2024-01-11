<?php
include "koneksi.php";
session_start();
global $koneksi;
$username= $_POST['username'];
$password= $_POST['password'];

$sql= "SELECT*FROM petugas WHERE username ='$username' AND pass='$password'";
$query= mysqli_query($koneksi,$sql);
if(mysqli_num_rows($query)>0){
    $data = mysqli_fetch_array($query);
    $_SESSION['level'] = $data['level'];
    $_SESSION['nama'] = $data['nama_petugas'];
    header("location:home.php");
}else{

    echo "
    <script>
        alert('Username Atau Password Salah');
        document.location.href = 'index.php';
        </script>";
    header("refresh:3;url=index.php");

}

?>