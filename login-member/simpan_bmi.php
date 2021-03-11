<?php
include "config2.php";

$id_member= $_POST['id_member'];
$tinggi= $_POST['tinggi'];
$bb= $_POST['bb'];
$jumlah= $_POST['jumlah'];
$hasil= $_POST['hasil'];
$tgl= $_POST['tgl'];


$query = "insert into bmi values('','$id_member','$tinggi','$bb','$jumlah','$hasil','$tgl')";
//var_dump($query); exit;
$hasil = mysqli_query($koneksi,$query);
if($hasil)
{
	echo "<script> alert('Data Berhasil Disimpan'); location.href='index.php?hal=dashboard' </script>";
}
else{
    echo "Penyimpanan gagal";
}
?>