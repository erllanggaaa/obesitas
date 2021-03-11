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
    //tampil data
$id_member = (int) $_GET['id_member'];
$j="select * from member where id_member='$id_member'";
$k=mysqli_query($koneksi,$j);
$l=mysqli_fetch_array($k);

//coding ubah
if(isset($_POST['save'])){
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
$bb= mysqli_real_escape_string($koneksi, $_POST['bb']);
$tinggi= mysqli_real_escape_string($koneksi, $_POST['tinggi']);

$a="update member set bb='$bb', tinggi='$tinggi' where id_member='$id_member'";
$b=mysqli_query($koneksi,$a);
    if($b){
    echo "<script> alert('Data Berhasil Diubah'); location.href='index.php?hal=lihat-hasil' </script>";
    }else{
    echo "Data gagal diubah <strong>-</strong> <a href='index.php?hal=lihat-hasil'><font color='orange'>Kembali</a></font>";
    }}
?>
<br>
            <!-- bagian ini merupakan bagian form untuk mengupdate data yang akan dimasukkan ke database -->
            <form method="POST" action="" enctype="multipart/form-data" class="form-horizontal">
            <div class="form-group">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Berat Badan</label>
                    <div class="col-sm-2">
                        <input type="text" name="bb" value="<?php echo $l['bb']; ?>" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tinggi Badan</label>
                    <div class="col-sm-2">
                        <input type="text" name="tinggi" value="<?php echo $l['tinggi']; ?>" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">&nbsp;</label>
                    <div class="col-sm-6"><br/>
                        <input type="submit" name="save" class="btn btn-sm btn-default" value="Simpan" data-toggle="tooltip" title="Simpan">
                        <a href="?hal=lihat-hasil" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Batal">Batal</a>
                    </div>
                </div>
<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
            </form>
        </div>
                </div>
                </div>
                <div class="col-lg-5 col-md-12 visible-xs center-text">
            </div>
        </div>
    </div>
</div>
</body>

</html>