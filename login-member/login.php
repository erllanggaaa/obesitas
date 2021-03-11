<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Login Member</title>

    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>  test
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body class="login-body">

<div class="container">

    <form class="form-signin" action="login-check.php" method="POST">
        <div class="form-signin-heading text-center">
            <h2><font color="black">LOGIN MEMBER</font></h2>
        </div>
        <div class="login-wrap">
            <?php
            error_reporting(0);
            if ($_GET['action'] == 'failed') {
                ?>
                <center><b style="color:red">Login Gagal!!!</b></center><br>
                <?php
            }else if ($_GET['action'] == 'fail') {
            ?>
                <center><b style="color:red">Maaf, Akun Anda Belum Diaktivasi!!!</b></center><br>
            <?php } ?>

            <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
            <input type="password" class="form-control" name="password" placeholder="Password">

            <button class="btn btn-block" type="submit" style="background: #331d10;">
                <!-- <i class="fa fa-check"></i> --> <b><font color="white">Login</font></b>
            </button>
<br><center>Belum punya akun? klik <a href="daftar">Daftar!</a></center>
        </div>
    </form>

</div>
<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>

</body>
</html>