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

    function tambah_guru($data){
        global$db;
        $nama =$data["ma"];
        $mapel=$data["mata"];
        $alamat=$data["alamat"];
        $ijazah=$data["ijazah"];
        $telpon=$data["no"];
    $tambah="INSERT INTO guru VALUES(
        '',
        '$nama',
        '$mapel',
        '$alamat',
        '$ijazah',
        '$telpon'
    )";
            
            mysqli_query($db,$tambah);
            return mysqli_affected_rows($db);
    }
    
    function id_guru($id){
        return query("SELECT*FROM guru WHERE id_guru = $id")[0];
    }
    function ubah_guru($data){
        global $db;
        $id=$data["id"];
        $nam=$data["ma"];
        $mapel=$data["mata"];
        $alamat=$data["alamat"];
        $ijazah=$data["ijazah"];
        $telpon=$data["no"];


        $ubah = "UPDATE guru SET
            nama='$nam',
            mata_pelajaran='$mapel',
            alamat='$alamat',
            ijazah='$ijazah',
            no_telp='$telpon'

            WHERE id_guru ='$id' ";
            mysqli_query($db,$ubah);
            return mysqli_affected_rows($db);
    }

    function hapus_guru($id){
        global $db;
        mysqli_query($db,"DELETE FROM guru WHERE id_guru = $id");
        return mysqli_affected_rows($db);
    }

    function cari_guru($keyword){
        $cari = "SELECT * FROM guru WHERE
        nama like '%$keyword%' OR
        mata_pelajaran like '%$keyword%' OR
        alamat like '%$keyword%'OR
        ijazah like '%$keyword%' OR
        no_telp like '%$keyword%' ";
        return query($cari);
    }
?>