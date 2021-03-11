<?php
error_reporting(0);
include('config2.php')
?>

<section id="columns" class="padtop40 padbot40">        
    <div class="container">  
        <div class="row">
                
            
        </div>
<html lang="en">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, iniitial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>

<body>
    <?php
    $query = mysqli_query ($koneksi, "SELECT * FROM member where username = '$_SESSION[username]'");
    $data = mysqli_fetch_array($query);
    $ngitung = $data['bb']/($data['tinggi']/100*$data['tinggi']/100);
    if($ngitung < 18.5){
            $hasil = "Kurus";
        } elseif($ngitung > 18.5 && $ngitung < 24.9){
            $hasil = "Normal";
        } elseif($ngitung > 25){
            $hasil = "Obesitas";
        }

    $ngitung2 = $data['bb']/($data['tinggi']/100*$data['tinggi']/100);
    if($ngitung2 < 18.5){
            $hasil2 = "<p align='justify'><ul><li>Makan Yang Bergizi</li><li>Olahraga Teratur</li></ul></p>";
        } elseif($ngitung2 > 18.5 && $ngitung2 < 24.9){
            $hasil2 = "<p align='justify'><ul><li>Makan Yang Bergizi</li><li>Olahraga Teratur</li></ul></p>";
        } elseif($ngitung2 > 25){
            $hasil2 = "<p align='justify'><ul><li>Makan Yang Bergizi</li><li>Olahraga Teratur</li></ul></p>";
        }

?>
    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        <h3 class="text-warning"><b>BMI</b> Body Mass Index <small>Indeks Masa Tubuh</small></h3>
        <hr style="border-top:1px dotted #ccc;" />
        <form method="POST" action="simpan_bmi.php">
            <div class="container">
                <div class="form-inline">
                    <div class="row">
                        <label>Berat Badan (kg):</label>
                    </div>
                    <div class="row">
                        <input type="hidden" name="id_member" value="<?php echo $_SESSION['id_member']; ?>">
                        <input type="text" placeholder="Masukan berat badan" name="bb" class="form-control" value="<?php echo $data['bb']; ?>">
                    </div>
                </div>
                <div class="form-inline">
                    <div class="row">
                        <label>Tinggi Badan (cm):</label>
                    </div>
                    <div class="row">
                        <input type="text"placeholder="Masukan tinggi badan" name="tinggi" class="form-control" value="<?php echo $data['tinggi']; ?>">
                    </div>
                        
                </div>
                <br /><br />
                <div class="form-inline">
                    <div class="row">
                        <label>BMI:</label>
                    </div>
                    <div class="row">
                    <input class="form-control" type="text" size="28" name="jumlah" value="<?php echo $ngitung; ?>" readonly >
                </div>
                </div>
                <br />
                <div class="form-inline">
                    <div class="row">
                        <label>Hasil:</label>
                    </div>
                    <div class="row">
                        <input class="form-control" type="text" name="hasil" value="<?php echo $hasil; ?>" size="28" readonly>
                    </div>
                </div>
                <br>
                <div class="form-inline">
                    <div class="row">
                        <label>Diambil pada tanggal:</label>
                    </div>
                    <div class="row">
                        <?php
                        $tgl=date('y-m-d');
                        echo $tgl;
                        ?>
                        <?php
                        $tgl2=date('y-m-d');
                        ?>
                        
                        <input class="form-control" type="hidden" name="tgl" value="<?php echo $tgl2; ?>" size="28" readonly>
                    </div>
                </div>
                <br>
                <div class="row">
                    <button class="btn btn-warning" type="Submit">SIMPAN</button>
                </div><br>
                <div class="form-inline">
                    <div class="row">
                        <label>Rekomendasi Diet:</label>
                    </div>
                    <div class="row">
                        <?php echo $hasil2; ?>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="js/script.js"></script>
</body>

</html>