<?php
include '../../koneksi.php';
$kd_dosen = $_POST['kd_dosen'];
$nama = $_POST['nama'];
$alamat=$_POST['alamat'];
mysqli_query($koneksi,"update tbl_dosen set nama='$nama',alamat='$alamat' where kd_dosen='$kd_dosen'");
header("location:index.php");
?>