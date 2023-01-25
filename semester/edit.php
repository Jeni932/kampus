<html>
<head>
<title>Edit Data SEMESTER</title>
</head>
<body>
<h2>Edit Data SEMESTER</h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>EDIT DATA SEMESTER</h3>
<?php
include '../../koneksi.php';
$kd_semester = $_GET['kd_semester'];
$data = mysqli_query($koneksi,"select * from tbl_semester where kd_semester='$kd_semester'");
while($d = mysqli_fetch_array($data)){
?>
<form method="post" action="edit_aksi.php">
<table>
<tr>
<td>Nama</td>
<td>
<input type="hidden" name="kd_semester" value="<?php echo $d['kd_semester']; ?>">
<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
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