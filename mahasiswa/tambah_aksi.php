<?php
// koneksi database
include '../../koneksi.php';
// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat=$_POST['alamat'];
// menginput data ke database
mysqli_query($koneksi,"insert into tbl_mahasiswa values('$nim','$nama','$jurusan','$alamat')");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>