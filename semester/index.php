<!DOCTYPE html>
<html>
<head>
<title>Data SEMESTER</title>
</head>
<body>
<h2>Data SEMESTER</h2>
<br/>
<a href="tambah.php">+ TAMBAH SEMESTER</a>
<br>
<table border="1">
<tr>
<th>NO</th>
<th>Kode</th>
<th>Nama</th>
<th>Alamat</th>
<th>OPSI</th>
</tr>
<?php
include '../../koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from tbl_semester");
while($d = mysqli_fetch_array($data)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['kd_semester']; ?></td>
<td><?php echo $d['nama']; ?></td>

<td>
<a href="edit.php?kd_semester=<?php echo $d['kd_semester']; ?>">EDIT</a>
<a href="hapus.php?kd_semester=<?php echo $d['kd_semester']; ?>">HAPUS</a>
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