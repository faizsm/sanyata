<?php require "../koneksi.php";
    function query($query){
        
        global $db;
        $result=mysqli_query($db,$query);
        $rows =[];
            while($row = mysqli_fetch_assoc($result)){
                $rows[] =$row;

           }
           return $rows;
    }

    function tambah_siswa($data){
        global$db;
        $na =$data["nama_jurusan"];
    $tambah="INSERT INTO jurusan VALUES(
        '',
        '$na'
    )";
            
            mysqli_query($db,$tambah);
            return mysqli_affected_rows($db);
    }
    
    function id_jurusan($id){
        return query("SELECT*FROM jurusan WHERE id_jurusan = $id")[0];
    }
    function ubah_jurusan($data){
        global $db;
        $id=$data["id"];
        $na =$data["nama_jurusan"];
        $ubah = "UPDATE jurusan SET

        
            nama_jurusan='$na'

            WHERE id_jurusan ='$id' ";
            mysqli_query($db,$ubah);
            return mysqli_affected_rows($db);
    }

    function hapus_jurusan($id){
        global $db;
        mysqli_query($db,"DELETE FROM jurusan WHERE id_jurusan = $id");
        return mysqli_affected_rows($db);
    }

    function cari_jurusan($keyword){
        $cari = "SELECT * FROM jurusan WHERE
        Nama_jurusan like '%$keyword%' ";
        return query($cari);
    }
?>