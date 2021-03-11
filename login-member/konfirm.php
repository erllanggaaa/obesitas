<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aktivasi Akun</title>
  <meta name="author" content="https://www.maribelajarcoding.com/">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" align="center">
  <br>
    <?php
         include "config2.php";
         $kode=$_GET['kode'];
         $sql_cek=mysqli_query($koneksi,"SELECT * FROM member WHERE kode='".$kode."' and aktif='T'");
         $jml_data=mysqli_num_rows($sql_cek);
         if ($jml_data>0) {
             //update data users aktif
             mysqli_query($koneksi,"UPDATE member SET aktif='Y' WHERE kode='".$kode."' and aktif='T'");
             echo '<div class="alert alert-success">
                        Akun anda sudah aktif, silahkan <a href="http://localhost/obesitas/login-member/">Login</a>
                        </div>';
         }else{
                    //data tidak di temukan
                     echo '<div class="alert alert-warning">
                        Invalid Kode!
                        </div>';
                   }
    ?>
</div>
</body>
</html>