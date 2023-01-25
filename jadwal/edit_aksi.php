<?php
// koneksi database
include '../../koneksi.php';
// menangkap data yang di kirim dari form\
$id=$_POST['id'];
$kd_dosen =$_POST['kd_dosen'];
$kd_matkul =$_POST['kd_matkul'];
$ruang = $_POST['ruang'];
$waktu=$_POST['waktu'];



// update data ke database
mysqli_query($koneksi,"update tbl_jadwal set kd_dosen='$kd_dosen', kd_matkul='$kd_matkul', ruang='$ruang', waktu='$waktu'  where id='$id'");// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>