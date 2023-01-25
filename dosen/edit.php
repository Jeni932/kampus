<html>
<head>
<title>Edit Data Dosen</title>
</head>
<body>
<h2>Edit Data Dosen</h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>EDIT DATA DOSEN</h3>
<?php
include '../../koneksi.php';
$kd_dosen = $_GET['kd_dosen'];
$data = mysqli_query($koneksi,"select * from tbl_dosen where kd_dosen='$kd_dosen'");
while($d = mysqli_fetch_array($data)){
?>
<form method="post" action="edit_aksi.php">
<table>
<tr>
<td>Nama</td>
<td>
<input type="hidden" name="kd_dosen" value="<?php echo $d['kd_dosen']; ?>">
<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
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