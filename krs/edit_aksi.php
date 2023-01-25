<?php
// koneksi database
include '../../koneksi.php';
// menangkap data yang di kirim dari form\
$id=$_POST['id'];
$id_jadwal =$_POST['id_jadwal'];
$nim = $_POST['nim'];
$kd_semester =$_POST['kd_semester'];

// update data ke database
mysqli_query($koneksi,"update tbl_krs set id_jadwal='$id_jadwal', nim='$nim', kd_semester='$kd_semester'  where id='$id'");// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>