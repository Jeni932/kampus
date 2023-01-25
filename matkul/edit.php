<html>
<head>
<title>Edit Data Mata Kuliah</title>
</head>
<body>
<h2>Edit Data Mata Kuliah</h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>EDIT DATA Mata Kuliah</h3>
<?php
include '../../koneksi.php';
$kd_matkul = $_GET['kd_matkul'];
$data = mysqli_query($koneksi,"select * from tbl_matkul where kd_matkul='$kd_matkul'");
while($d = mysqli_fetch_array($data)){
?>
<form method="post" action="edit_aksi.php">
<table>
<tr>
<td>Nama</td>
<td>
<input type="hidden" name="kd_matkul" value="<?php echo $d['kd_matkul']; ?>">
<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
<input type="text" name="sks" value="<?php echo $d['sks']; ?>">
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