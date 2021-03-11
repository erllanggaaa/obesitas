<?php 
include('config2.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Daftar Member</title>

    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>  test
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body class="login-body">

    <?php
            if(isset($_POST['add'])){ // jika tombol 'Simpan' dengan properti name="add" pada baris 164 ditekan
$nama= $_POST['nama'];
$email=  $_POST['email'];
$ttl=  $_POST['ttl'];
$bb=  $_POST['bb'];
$tinggi=  $_POST['tinggi'];
$username=  $_POST['username'];
$password=  $_POST['password'];
$level=  $_POST['level'];
$kode= md5(uniqid(rand()));
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
$id_member = $_GET['id_member'];
$cek = mysqli_query($koneksi, "SELECT * FROM member WHERE id_member='$id_member'"); // query untuk memilih entri dengan nama terpilih
                        $insert = mysqli_query($koneksi, "INSERT INTO member(nama, email, ttl, bb, tinggi, username, password, level, kode, aktif) VALUES('$nama','$email', '$ttl', '$bb', '$tinggi', '$username', '" . password_hash($_POST['password'], PASSWORD_DEFAULT) . "', '$level', '$kode', 'T')") or die(mysqli_error()); // query untuk menambahkan data ke dalam database

require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'aslamhaikal98@gmail.com';          // SMTP username
$mail->Password = 'exsel1234'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('aslamhaikal98@gmail.com', 'Aslam Haikal');
$mail->addReplyTo('aslamhaikal98@gmail.com', 'Aslam Haikal');
$mail->addAddress($email);   // Add a recipient
$mail->addCC('');
$mail->addBCC('');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Silahkan verifikasi email anda</h1>';
$bodyContent .= '<p>Klik link berikut : <a href="http://localhost/obesitas/login-member/konfirm.php?kode='.$kode.'">http://localhost/obesitas/login-member/konfirm.php?kode='.$kode.'</a></p>';

$mail->Subject = 'Aktivasi Akun Anda';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo '<center><font color="white">Message could not be sent.</font></center>';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '<center><font color="white">Message has been sent</font></center>';
}
}
 

            ?>

<div class="container">

    <form class="form-signin" action="" method="POST">
        <div class="form-signin-heading text-center">
            <h2><font color="black">DAFTAR MEMBER</font></h2>
        </div>
        <div class="login-wrap">
            <input type="hidden" class="form-control" name="level" value="member">
            <input type="text" class="form-control" name="nama" placeholder="Nama">
            <input type="text" class="form-control" name="email" placeholder="Email">
            <input type="date" class="form-control" name="ttl" placeholder="TTL"><br>
            <input type="text" class="form-control" name="bb" placeholder="Berat Badan">
            <input type="text" class="form-control" name="tinggi" placeholder="Tinggi">
            <input type="text" class="form-control" name="username" placeholder="Username">
            <input type="password" class="form-control" name="password" placeholder="Password">
            
            <button class="btn btn-block" type="submit" name="add" style="background: #331d10;">
                <!-- <i class="fa fa-check"></i> --> <b><font color="white">Daftar</font></b>
            </button>
            </form>
            <br>
<center>Sudah punya akun? silahkan <a href="http://localhost/obesitas/login-member">Login!</a></center>
        </div>
    

</div>
<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>

</body>
</html>