<?php
// koneksi database
include '../../koneksi.php';
// menangkap data yang di kirim dari form
$kd_matkul = $_POST['kd_matkul'];
$nama = $_POST['nama'];
$sks=$_POST['sks'];
// menginput data ke database
mysqli_query($koneksi,"insert into tbl_matkul values('$kd_matkul','$nama','$sks')");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>