<div class="left-side sticky-left-side">
    <!--logo and iconic logo start-->
    <div class="logo">
        <a href="index.php">SAY NO OBESITAS</a>
    </div>

    <div class="logo-icon text-center">
        <a href="index.php">SAY NO OBESITAS</a>
    </div>
    <!--logo and iconic logo end-->

    <div class="left-side-inner">
        <!-- visible to small devices only -->
        <!--sidebar nav start-->
        <ul class="nav nav-pills nav-stacked custom-nav">
            <?php $data = url($_GET['hal']); ?>
            <li><a href="?hal=dashboard"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li><a href="?hal=edit&id_member=<?php echo $_SESSION['id_member']; ?>"><i class="fa fa-pencil"></i> <span>Update data</span></a> 
            <li><a href="?hal=lihat-hasil"><i class="fa fa-th-list"></i> <span>Lihat Hasil</span></a></li>
            <li><a href="logout.php"><i class="fa fa-sign-in"></i> <span>Logout</span></a></li>
        </ul>
        <!--sidebar nav end-->
    </div>
</div>
<!-- https://demo.dealpos.com/A/POS.aspx -->