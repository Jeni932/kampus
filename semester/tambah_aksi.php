<?php
// koneksi database
include '../../koneksi.php';
// menangkap data yang di kirim dari form
$kode_semester = $_POST['kode_semester'];
$nama = $_POST['nama'];
// menginput data ke database
mysqli_query($koneksi,"insert into tbl_semester values('$kode_semester','$nama')");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>