<html>
<head>
<title>input data Jurusan</title>
</head>

<body>

<?php

 $id= $_POST['id'];
$nama = $_POST['nama'];
$keterangan = $_POST['keterangan'];


// koneksi database
$koneksi = mysqli_connect("localhost","root","","db_smk_nadhif");

if(!$koneksi){
    die("Koneksi gagal : ".mysqli_connect_error());
}


// query simpan data

$query = mysqli_query($koneksi,
"INSERT INTO jurusan (id,nama,keterangan) VALUES ('$id', '$nama','$keterangan')");

if($query){
    echo "Data sudah tersimpan";
}else{
    echo "Data gagal disimpan<br>";
    echo mysqli_error($koneksi);
}


?>

</body>
</html>
