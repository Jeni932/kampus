<!DOCTYPE html>
<html>
<head>
<title>Data Jadwal</title>
</head>
<body>
<h2>Data Jadwal</h2>
<br/>
<a href="tambah.php">+ TAMBAH Jadwal</a>
<br/>
<br/>
<table border="1">
<tr>
<th>NO</th>
<th>Matakuliah</th>
<th>Nama Dosen</th>
<th>Waktu</th>
<th>Ruang</th>
<th>OPSI</th>
</tr>
<?php
include '../../koneksi.php';
$no = 1;
//$data = mysqli_query($koneksi,"select * from view_jadwal");
$data = mysqli_query($koneksi,"select m.nama as nama_matkul, d.nama as nama_dosen, j.waktu, j.ruang, j.id  from tbl_jadwal j INNER JOIN tbl_matkul m ON j.kd_matkul=m.kd_matkul INNER JOIN tbl_dosen d ON j.kd_dosen=d.kd_dosen");
while($d = mysqli_fetch_array($data)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['nama_matkul']; ?></td>
<td><?php echo $d['nama_dosen']; ?></td>
<td><?php echo $d['waktu']; ?></td>
<td><?php echo $d['ruang']; ?></td>

<td>
<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
</td>
</tr>
<?php
}
?>
</table>
<br/>
<a href="../index.php">Back To Main Menu</a><br>
<a href="logout.php">LOGOUT</a>
</body>
</html>