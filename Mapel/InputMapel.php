<html>
<head>
<title>input data Mapel</title>
</head>

<body>

<?php

 $id= $_POST['id'];
$nama = $_POST['nama'];
$pengampu = $_POST['pengampu'];
$keterangan = $_POST['keterangan'];


// koneksi database
$koneksi = mysqli_connect("localhost","root","","db_smk_nadhif");

if(!$koneksi){
    die("Koneksi gagal : ".mysqli_connect_error());
}


// query simpan data

$query = mysqli_query($koneksi,
"INSERT INTO mapel (id,nama,pengampu,keterangan) VALUES ('$id', '$nama','$pengampu','$keterangan')");

if($query){
    echo "Data sudah tersimpan";
}else{
    echo "Data gagal disimpan<br>";
    echo mysqli_error($koneksi);
}


?>

</body>
</html>
