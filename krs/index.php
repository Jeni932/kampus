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
<th>ID KRS</th>
<th>NIM</th>
<th>Nama Mahasiswa</th>
<th>Mata Kuliah</th>
<th>Nama Dosen</th>
<th>Waktu</th>
<th>Ruang</th>
<th>Semester</th>
<th>OPSI</th>
</tr>
<?php
include '../../koneksi.php';
$no = 1;
//$data = mysqli_query($koneksi,"select * from view_jadwal");
$data = mysqli_query($koneksi,"SELECT tbl_krs.id as id_krs,tbl_mahasiswa.nim,tbl_mahasiswa.nama as nama_mahasiswa,tbl_jadwal.ruang,tbl_jadwal.waktu,tbl_jadwal.id as id_jadwal,tbl_matkul.nama as nama_matkul,tbl_matkul.sks, tbl_dosen.nama as nama_dosen,tbl_semester.kd_semester,tbl_semester.nama from tbl_krs INNER JOIN tbl_jadwal on tbl_jadwal.id=tbl_krs.id_jadwal INNER JOIN tbl_dosen on tbl_dosen.kd_dosen=tbl_jadwal.kd_dosen INNER JOIN tbl_mahasiswa ON tbl_mahasiswa.nim=tbl_krs.nim INNER JOIN tbl_matkul on tbl_matkul.kd_matkul=tbl_jadwal.kd_matkul INNER JOIN tbl_semester on tbl_semester.kd_semester=tbl_krs.kd_semester");
while($d = mysqli_fetch_array($data)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['id_krs']; ?></td>
<td><?php echo $d['nim']; ?></td>
<td><?php echo $d['nama_mahasiswa']; ?></td>
<td><?php echo $d['nama_matkul']; ?></td>
<td><?php echo $d['nama_dosen']; ?></td>
<td><?php echo $d['waktu']; ?></td>
<td><?php echo $d['ruang']; ?></td>
<td><?php echo $d['nama']; ?></td>

<td>
<a href="edit.php?id=<?php echo $d['id_krs']; ?>">EDIT</a>
<a href="hapus.php?id=<?php echo $d['id_krs']; ?>">HAPUS</a>
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