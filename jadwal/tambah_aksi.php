<?php
// koneksi database
include '../../koneksi.php';
// menangkap data yang di kirim dari form
$kd_matkul = $_POST['kd_matkul'];
$kd_dosen = $_POST['kd_dosen'];
$ruang = $_POST['ruang'];
$waktu = $_POST['waktu'];
// menginput data ke database
mysqli_query($koneksi,"insert into tbl_jadwal(kd_matkul,kd_dosen,ruang,waktu) values('$kd_matkul','$kd_dosen','$ruang','$waktu')");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>
