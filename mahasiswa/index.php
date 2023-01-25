<!DOCTYPE html>
<html>
<head>
<title>Data Mahasiswa</title>
</head>
<body>
<h2>Data Mahasiswa</h2>
<br/>
<a href="tambah.php">+ TAMBAH Mahasiswa</a>
<br>
<table border="1">
<tr>
<th>NO</th>
<th>NIM</th>
<th>Nama</th>
<th>Jurusan</th>
<th>Alamat</th>
<th>OPSI</th>
</tr>
<?php
include '../../koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from tbl_mahasiswa");
while($d = mysqli_fetch_array($data)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['nim']; ?></td>
<td><?php echo $d['nama']; ?></td>
<td><?php echo $d['jurusan']; ?></td>
<td><?php echo $d['alamat']; ?></td>

<td>
<a href="edit.php?nim=<?php echo $d['nim']; ?>">EDIT</a>
<a href="hapus.php?nim=<?php echo $d['nim']; ?>">HAPUS</a>
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