<!DOCTYPE html>
<html>
<head>
<title>Tambah Data KRS</title>
</head>
<body>
<h2>Tambah Data KRS</h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<form method="post" action="tambah_aksi.php">
<table>

<tr>
<td>Jadwal</td>
<td><select name="id">
<?php
include '../../koneksi.php';
$data = mysqli_query($koneksi,"SELECT tbl_jadwal.id,tbl_jadwal.ruang,tbl_jadwal.waktu, tbl_dosen.nama as nama_dosen, tbl_matkul.nama as nama_matkul,tbl_matkul.sks from tbl_jadwal INNER JOIN tbl_dosen ON tbl_dosen.kd_dosen=tbl_jadwal.kd_dosen INNER JOIN tbl_matkul ON tbl_matkul.kd_matkul=tbl_jadwal.kd_matkul");
while($d = mysqli_fetch_array($data)){
?>
<option value=" <?php echo $d['id'];?>"><?php echo $d['nama_dosen'];?>||<?php echo $d['nama_matkul'];?>||<?php echo $d['waktu'];?>||<?php echo $d['ruang'];?></option>
<?php
}
?>
</select>
</td>
</tr>



<tr>
<td>Mahasiswa</td>
<td><select name="nim">
<?php

$data = mysqli_query($koneksi,"select * from tbl_mahasiswa ");
while($d = mysqli_fetch_array($data)){
?>
<option value=" <?php echo $d['nim'];?>"><?php echo $d['nama'];?></option>
<?php
}
?>
</select>
</td>
</tr>

<tr>
<td>Semester</td>
<td><select name="kd_semester">
<?php

$data = mysqli_query($koneksi,"select * from tbl_semester ");
while($d = mysqli_fetch_array($data)){
?>
<option value=" <?php echo $d['kd_semester'];?>"><?php echo $d['nama'];?></option>
<?php
}
?>
</select>
</td>
</tr>


<tr>
<td></td>
<td><input type="submit" value="SIMPAN"></td>
</tr>
</table>
</form>
</body>
</html>