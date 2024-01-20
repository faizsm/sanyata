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

    function tambah_sekolah($data){
        global$db;
        $na =$data["nama_sekolah"];
    $tambah="INSERT INTO sekolah VALUES(
        '',
        '$na'
    )";
            
            mysqli_query($db,$tambah);
            return mysqli_affected_rows($db);
    }
    
    function id_jurusan($id){
        return query("SELECT*FROM sekolah WHERE id_sekolah = $id")[0];
    }
    function ubah_sekolah($data){
        global $db;
        $id=$data["id"];
        $na =$data["nama_sekolah"];
        $ubah = "UPDATE sekolah SET

        
            nama_sekolah='$na'

            WHERE id_sekolah ='$id' ";
            mysqli_query($db,$ubah);
            return mysqli_affected_rows($db);
    }

    function hapus_sekolah($id){
        global $db;
        mysqli_query($db,"DELETE FROM sekolah WHERE id_sekolah = $id");
        return mysqli_affected_rows($db);
    }

    function cari_sekolah($keyword){
        $cari = "SELECT * FROM sekolah WHERE
        nama_sekolah like '%$keyword%' ";
        return query($cari);
    }
?>