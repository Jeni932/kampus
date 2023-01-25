<?php
// koneksi database
include '../../koneksi.php';
// menangkap data yang di kirim dari form
$kd_semester = $_POST['kd_semester'];
$nama = $_POST['nama'];
// update data ke database
mysqli_query($koneksi,"update tbl_semester set nama='$nama' where kd_semester='$kd_semester'");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>