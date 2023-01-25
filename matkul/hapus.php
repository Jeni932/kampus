<?php
// koneksi database
include '../../koneksi.php';
// menangkap data id yang di kirim dari url
$kd_matkul = $_GET['kd_matkul'];
// menghapus data dari database
mysqli_query($koneksi,"delete from tbl_matkul where kd_matkul='$kd_matkul'");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>