<?php
// koneksi database
include '../../koneksi.php';
// menangkap data id yang di kirim dari url
$kd_semester = $_GET['kd_semester'];
// menghapus data dari database
mysqli_query($koneksi,"delete from tbl_semester where kd_semester='$kd_semester'");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>