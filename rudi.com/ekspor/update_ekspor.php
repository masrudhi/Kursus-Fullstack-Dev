<?php include 'protect.php' ?>
<html>
<head><link rel="stylesheet" href="bootstrap/css/bootstrap.css"/></head>
<body><center>
<p align="right">
    <a href="logout.php" class="btn btn-danger">Logout</a>
</p>

    <h3>Top 10 Ekspor Indonesia</h3>
    <hr/>
    <div style="width:30%">
    <?php
    include 'koneksi.php';
    $kueri = "select * from ekspor where no='$_GET[pk]' ";
    $go = mysqli_query($koneksi, $kueri);
    $kolom = mysqli_fetch_array($go);
    ?>
    <form method="post" action="update_ekspor.php">
    <br/><input name="no" value="<?php echo $kolom['no'] ?>" class="form-control" required readonly />
    <br/><input name="jenis_komoditas" value="<?php echo $kolom['jenis_komoditas'] ?>" class="form-control" required />
    <br/><input name="tujuan_negara" value="<?php echo $kolom['tujuan_negara'] ?>" class="form-control" required />
    <br/><input name="milyar_usd" value="<?php echo $kolom['milyar_usd'] ?>" class="form-control" required />
    <br/><input type="submit" value="SIMPAN" name="tombol_simpan" class="btn btn-success btn-sm">
    <br/><a href="read_ekspor.php">KEMBALI</a>
    </form>
    <?php
    if(isset($_POST['tombol_simpan']))
    {
    include 'koneksi.php';
    $kueri = "update ekspor set
            jenis_komoditas='$_POST[jenis_komoditas]',
            tujuan_negara='$_POST[tujuan_negara]',
            milyar_usd='$_POST[milyar_usd]'
            where no='$_POST[no]'
            ";
    mysqli_query($koneksi, $kueri);
    header('location:read_ekspor.php');
    }
    ?>