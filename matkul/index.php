<!DOCTYPE html>
<html>
<head>
<title>Data Mata Kuliah</title>
</head>
<body>
<h2>Data Mata Kuliah</h2>
<br/>
<a href="tambah.php">+ TAMBAH Mata Kuliah</a>
<br>
<table border="1">
<tr>
<th>NO</th>
<th>Kode</th>
<th>Nama</th>
<th>SKS</th>
<th>OPSI</th>
</tr>
<?php
include '../../koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from tbl_matkul");
while($d = mysqli_fetch_array($data)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['kd_matkul']; ?></td>
<td><?php echo $d['nama']; ?></td>
<td><?php echo $d['sks']; ?></td>

<td>
<a href="edit.php?kd_matkul=<?php echo $d['kd_matkul']; ?>">EDIT</a>
<a href="hapus.php?kd_matkul=<?php echo $d['kd_matkul']; ?>">HAPUS</a>
</td>
</tr>
<?php
}
?>
</table>
<br/>
<a href="../index.php">Back To Main Menu</a><br>
<a href="../logout.php">LOGOUT</a>
</body>
</html>