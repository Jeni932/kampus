<!DOCTYPE html>
<html>
<head>
<title>Tambah Data Jadwal</title>
</head>
<body>
<h2>Tambah Data Jadwal</h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<form method="post" action="tambah_aksi.php">
<table>

<tr>
<td>Matkul</td>
<td><select name="kd_matkul">
<?php
include '../../koneksi.php';
$data = mysqli_query($koneksi,"select * from tbl_matkul ");
while($d = mysqli_fetch_array($data)){
?>
<option value=" <?php echo $d['kd_matkul'];?>"><?php echo $d['nama'];?></option>
<?php
}
?>
</select>
</td>
</tr>
<tr>
<td>Dosen</td>
<td><select name="kd_dosen">
<?php

$data = mysqli_query($koneksi,"select * from tbl_dosen ");
while($d = mysqli_fetch_array($data)){
?>
<option value=" <?php echo $d['kd_dosen'];?>"><?php echo $d['nama'];?></option>
<?php
}
?>
</select>
</td>
</tr>
<tr>
<td>Ruang</td>
<td><input type="text" name="ruang"></td>
</tr>
<tr>
<td>Waktu</td>
<td><input type="text" name="waktu"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="SIMPAN"></td>
</tr>
</table>
</form>
</body>
</html>