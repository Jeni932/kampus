<html>
<head>
<title>Membuat Login Dengan PHP dan MySQLi </title>
</head>
<body>
<h2>Halaman Admin</h2>

    <br/>
<!– cek apakah sudah login –>
<?php
session_start();
if($_SESSION['status']!="login"){
header("location:../login.php?pesan=belum_login");
}
?>
<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
<h4>Master</h4>
<a href="dosen"><button>Data Dosen</button></a>


<br/>
<h4>Jadwal Kuliah</h4>
<a href="jadwal"><button>BUAT JADWAL</button></a>


<br/>
<h4>Mahasiswa</h4>
<a href="mahasiswa"><button>Daftar Mahasiswa</button></a>

<br/>
<h4>Mata Kuliah</h4>
<a href="matkul"><button>BUAT Mata Kuliah</button></a>
<br/>

<br/>
<h4>Semester</h4>
<a href="semester"><button>Semester</button></a>
<br/>

<br/>
<h4>KRS</h4>
<a href="krs"><button>KRS</button></a>
<br/>



<br/>
<a href="logout.php">LOGOUT</a>
</body>
</html>