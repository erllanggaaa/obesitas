<?php 

$namaserver = "localhost";//nama server saya
$namauser = "root"; //username server saya
$password = "";  //password saya kosongin
$database = "web_obesitas"; //database name server saya

//Membuat koneksi
$koneksi = mysqli_connect($namaserver, $namauser, $password, $database);

//Mengecek koneksi 
if(!$koneksi) {
 die("Koneksi Failed : ".mysqli_connect_error());

echo "Koneksi Berhasil";

}
?>