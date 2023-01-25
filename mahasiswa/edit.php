<html>
<head>
<title>Edit Data Mahasiswa</title>
</head>
<body>
<h2>Edit Data Mahasiswa</h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>EDIT DATA Mahasiswa</h3>
<?php
include '../../koneksi.php';
$nim = $_GET['nim'];
$data = mysqli_query($koneksi,"select * from tbl_mahasiswa where nim='$nim'");
while($d = mysqli_fetch_array($data)){
?>
<form method="post" action="edit_aksi.php">
<table>
<tr>
<td>Nama</td>
<td>
<input type="hidden" name="nim" value="<?php echo $d['nim']; ?>">
<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
<input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>">
<input type="text" name="alamat" value="<?php echo $d['alamat']; ?>">
</td>
</tr>
<td></td>
<td><input type="submit" value="SIMPAN"></td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>