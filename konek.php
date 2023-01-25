<?php
class koneksi{
    public function get_koneksi(){
        $conn = mysqli_connect("localhost","root","","db_ujikom");
        if(mysqli_connect_errno()){
            echo "koneksi database gagal :" . mysqli_connect_errno();
        }
        return $conn;
    }
}

$konek = new koneksi();
$koneksi = $konek->get_koneksi();
?>