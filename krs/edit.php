<!DOCTYPE html>
<html>
<head>
<title>Edit Data Jadwal</title>
</head>
<body>
<h2>Edit Data Jadwal</h2>
<?php
include '../../koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT tbl_krs.id as id_krs,tbl_mahasiswa.nim,tbl_mahasiswa.nama as nama_mahasiswa,tbl_jadwal.ruang,tbl_jadwal.waktu,tbl_jadwal.id as id_jadwal,tbl_matkul.nama as nama_matkul,tbl_matkul.sks, tbl_dosen.nama as nama_dosen,tbl_semester.kd_semester,tbl_semester.nama from tbl_krs INNER JOIN tbl_jadwal on tbl_jadwal.id=tbl_krs.id_jadwal INNER JOIN tbl_dosen on tbl_dosen.kd_dosen=tbl_jadwal.kd_dosen INNER JOIN tbl_mahasiswa ON tbl_mahasiswa.nim=tbl_krs.nim INNER JOIN tbl_matkul on tbl_matkul.kd_matkul=tbl_jadwal.kd_matkul INNER JOIN tbl_semester on tbl_semester.kd_semester=tbl_krs.kd_semester");
while($d_jadwal = mysqli_fetch_array($data)){
    
?>

<br/>
<a href="index.php">KEMBALI</a>
<br/>

<form method="post" action="edit_aksi.php">
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<table>


<tr>
<td>Matkul</td>
<td><select name="kd_matkul">
<option value=" <?php echo $d_jadwal['kd_matkul'];?>"><?php echo $d_jadwal['nama_matkul'];?></option>
<?php
//include '../../koneksi.php';
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
<option value=" <?php echo $d_jadwal['kd_dosen'];?>"><?php echo $d_jadwal['nama_dosen'];?></option>
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
<td><input type="text" name="ruang" value="<?php echo $d_jadwal['ruang']; ?>"></td>
</tr>
<tr>
<td>Waktu</td>
<td><input type="text" name="waktu" value="<?php echo $d_jadwal['waktu']; ?>"></td>
</tr>
<tr>
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