<html>
<head>
<title>input data siswa</title>
</head>

<body>

<?php

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];


// koneksi database
$koneksi = mysqli_connect("localhost","root","","db_smk_nadhif");

if(!$koneksi){
    die("Koneksi gagal : ".mysqli_connect_error());
}


// query simpan data
$query = mysqli_query($koneksi,
"INSERT INTO siswa (nis,nama,kelas,jurusan,alamat) VALUES ('$nis', '$nama', '$kelas', '$jurusan', '$alamat')");

if($query){
    echo "Data sudah tersimpan";
}else{
    echo "Data gagal disimpan<br>";
    echo mysqli_error($koneksi);
}


?>

</body>
</html>
