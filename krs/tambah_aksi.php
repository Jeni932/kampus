<?php
// koneksi database
include '../../koneksi.php';
// menangkap data yang di kirim dari form
$id_jadwal= $_POST['id'];
$nim = $_POST['nim'];
$kd_semester = $_POST['kd_semester'];
// menginput data ke database
mysqli_query($koneksi,"insert into tbl_krs(id,nim,kd_semester) values('$id_jadwal','$nim','$kd_semester')");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
