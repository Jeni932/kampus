<?php
// koneksi database
include '../../koneksi.php';
// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan=$_POST['jurusan'];
$alamat=$_POST['alamat'];
// update data ke database
mysqli_query($koneksi,"update tbl_mahasiswa set nama='$nama',jurusan='$jurusan',alamat='$jurusan' where nim='$nim'");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>