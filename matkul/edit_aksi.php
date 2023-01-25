<?php
// koneksi database
include '../../koneksi.php';
// menangkap data yang di kirim dari form
$kd_matkul = $_POST['kd_matkul'];
$nama = $_POST['nama'];
$sks=$_POST['sks'];
// update data ke database
mysqli_query($koneksi,"update tbl_matkul set nama='$nama',sks='$sks' where kd_matkul='$kd_matkul'");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>