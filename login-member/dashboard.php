<?php
error_reporting(0);
?>

  <div class="wrapper">
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Grafik : <?php echo $_SESSION['username']; ?>
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                    <div class="adv-table editable-table ">
                        <div class="clearfix">
                            <div class="btn-group pull-right">
                            </div>
                        </div>
                        <div class="space15"></div>


    <script type="text/javascript" src="http://localhost/obesitas/login-member/Chart.js"></script>
    <?php
include('config.php');
$id_member =  $_SESSION['id_member'];
?>
    <div style="width: 100%;margin: 0px auto;">
                                    <canvas id="myChart"></canvas>
                                </div>
                                <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [<?php $grafik   =   mysql_query("SELECT id_bmi, hasil, tgl 
                                                                FROM bmi 
                                                                WHERE id_member='$id_member'
                                                                ORDER by id_bmi DESC limit 0,5");
                                        while ($row=mysql_fetch_array($grafik)) { ?>

                                        "<?php echo $row['tgl']; ?> (<?php echo $row['hasil']; ?>)",<?php } ?>],
                datasets: [{
                    label: 'Jumlah',
                    data: [
                    <?php $grafik2   =   mysql_query("SELECT id_bmi, jumlah 
                                                                FROM bmi 
                                                                WHERE id_member='$id_member'
                                                                ORDER by id_bmi DESC limit 0,5");
                                        while ($row=mysql_fetch_array($grafik2)) { ?>
                                        "<?php echo $row['jumlah']; ?>",<?php } ?>
                    ],
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(25, 19, 132, 0.2)',
                    'rgba(70, 148, 112, 0.2)',
                    'rgba(48, 79, 92, 0.2)',
                    'rgba(175, 166, 112, 0.2)'
                    ],
                    borderColor: [
                    'rgba(0,0,0,1)',
                    'rgba(0,0,0,1)',
                    'rgba(0,0,0,1)',
                    'rgba(0,0,0,1)',
                    'rgba(0,0,0,1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>

    
                    </div>
                </div>
            </section>
        </div>

        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    History Diet : <?php echo $_SESSION['username']; ?>
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                    <div class="adv-table editable-table ">
                        <div class="clearfix">
                            <div class="btn-group pull-right">
                            </div>
                        </div>
                        <div class="space15"></div>
                        <table class="table table-striped table-hover table-bordered" id="editable-sample">
                            <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Tinggi Badan</th>
                                <th>Berat Badan</th>
                                <th>Jumlah BMI</th>
                                <th>Hasil</th>
                                <th>Tanggal</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            include('config.php');
                            $id_member =  $_SESSION['id_member'];
                            $queryUsers = mysql_query("SELECT a.id_member, a.nama, b.tinggi, b.bb, b.jumlah, b.hasil, b.tgl FROM member a JOIN bmi b ON a.id_member=b.id_member WHERE a.id_member='$id_member'");
                            while ($rowUsers = mysql_fetch_array($queryUsers)) {
                                ?>
                                <tr class="">
                                    <td><?php echo $rowUsers['nama']; ?></td>
                                    <td><?php echo $rowUsers['tinggi']; ?></td>
                                    <td><?php echo $rowUsers['bb']; ?></td>
                                    <td><?php echo $rowUsers['jumlah']; ?></td>
                                    <td><?php echo $rowUsers['hasil']; ?></td>
                                    <td><?php echo $rowUsers['tgl']; ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>