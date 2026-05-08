<html>
<head>
<title>input data Ruang</title>
</head>

<body>

<?php

$id = $_POST['id'];
$nama = $_POST['nama'];
$kapasitas = $_POST['kapasitas'];
$keterangan = $_POST['keterangan'];


// koneksi database
$koneksi = mysqli_connect("localhost","root","","db_smk_nadhif");

if(!$koneksi){
    die("Koneksi gagal : ".mysqli_connect_error());
}


// query simpan data

$query = mysqli_query($koneksi,
"INSERT INTO ruang (id,nama,kapasitas,keterangan) VALUES ('$id', '$nama','$kapasitas','$keterangan')");

if($query){
    echo "Data sudah tersimpan";
}else{
    echo "Data gagal disimpan<br>";
    echo mysqli_error($koneksi);
}


?>

</body>
</html>
