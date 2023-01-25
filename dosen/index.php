<!DOCTYPE html>
<html>
<head>
<title>Data Dosen</title>
</head>
<body>
<h2>Data Dosen</h2>
<br/>
<a href="tambah.php">+ TAMBAH DOSEN</a>
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
$data = mysqli_query($koneksi,"select * from tbl_dosen");
while($d = mysqli_fetch_array($data)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['kd_dosen']; ?></td>
<td><?php echo $d['nama']; ?></td>
<td><?php echo $d['alamat']; ?></td>

<td>
<a href="edit.php?kd_dosen=<?php echo $d['kd_dosen']; ?>">EDIT</a>
<a href="hapus.php?kd_dosen=<?php echo $d['kd_dosen']; ?>">HAPUS</a>
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