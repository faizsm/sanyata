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
        $na =$data["nisn"];
        $las=$data["nama"];
        $mat=$data["jenis_kelamin"];
        $jurus=$data["jurusan"];
        $tus=$data["sekolah"];

        $rand = rand();
        $ekstensi =  array('png','jpg','jpeg','gif');
        $filename = $_FILES['foto']['name'];
        $ukuran = $_FILES['foto']['size'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        
        if(!in_array($ext,$ekstensi) ) {
            return mysqli_affected_rows($db);
        }else{
            if($ukuran < 1044070){		
                $xx = $rand.'_'.$filename;
                move_uploaded_file($_FILES['foto']['tmp_name'], '../asset/img/'.$rand.'_'.$filename);
                $tambah="INSERT INTO siswa VALUES(
                    '',
                    '$na',
                    '$xx',
                    '$las',
                    '$mat',
                    '$jurus',
                    '$tus'
                )";
                mysqli_query($db,$tambah);
                return mysqli_affected_rows($db);
            }else{
                return mysqli_affected_rows($db);
            }
        }
    }
    
    function id_siswa($id){
        return query("SELECT 
        a.id,
        a.nisn,
        a.foto,
        a.nama,
        a.jenis_kelamin,
        b.id_jurusan,
        b.Nama_jurusan,
        c.id_sekolah,
        c.nama_sekolah
        FROM siswa AS a JOIN jurusan AS b ON a.id_jurusan = b.id_jurusan
        JOIN sekolah AS c ON a.id_sekolah = c.id_sekolah 
        WHERE a.id = $id")[0];
    }
function ubah_siswa($data){
    global $db;
    $id = $data["id"];
    $na = $data["nisn"];
    $las = $data["nama"];
    $mat = $data["jenis_kelamin"];
    $jurus = $data["jurusan"];
    $tus = $data["sekolah"];

    $rand = rand();
    $ekstensi = array('png', 'jpg', 'jpeg', 'gif');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext, $ekstensi)) {
        return mysqli_affected_rows($db);
    } else {
        if ($ukuran < 1044070) {
            $xx = $rand . '_' . $filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], '../asset/img/' . $rand . '_' . $filename);

            $ubah = "UPDATE siswa SET
                nisn='$na',
                foto='$xx',
                nama='$las',
                jenis_kelamin='$mat',
                id_jurusan='$jurus',
                id_sekolah='$tus'
                WHERE id ='$id' ";

            mysqli_query($db, $ubah);
            return mysqli_affected_rows($db);
        } else {
            return mysqli_affected_rows($db);
        }
    }
}


    function hapus_siswa($id){
        global $db;
        mysqli_query($db,"DELETE FROM siswa WHERE id = $id");
        return mysqli_affected_rows($db);
    }

    function cari_siswa($keyword){
        $cari = "SELECT * FROM siswa WHERE
        nisn like '%$keyword%' OR
        nama like '%$keyword%' OR
        jenis_kelamin like '%$keyword%'OR
        id_jurusan like '%$keyword%' OR
        id_sekolah like '%$keyword%'";
        return query($cari);
    }
?>