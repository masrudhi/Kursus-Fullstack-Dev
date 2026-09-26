<?php include 'protect.php'; ?>	
<html>
<head><link rel="stylesheet" href="bootstrap/css/bootstrap.css"/></head>
<body>
<center>

<p align="right">
	<a href="logout.php" class="btn btn-danger">Logout</a>
</p>
<h3>Top 10 Ekspor Indonesia</h3>
<hr/>
<div style="width:30%">
<form method="post" action="create_ekspor.php">
<br/><input name="no" placeholder="NO" class="form-control" required />
<br/><input name="jenis_komoditas" placeholder="JENIS KOMODITAS" class="form-control" required />
<br/><input name="tujuan_negara" placeholder="TUJUAN NEGARA" class="form-control" required />
<br/><input name="milyar_usd" placeholder="NILAI MILYAR USD" class="form-control" required />
<br/><input type="submit" name="tombol_simpan" value="SIMPAN" class="btn btn-success btn-sm">
<br/><a href="read_ekspor.php">kembali</a>

</form>
<?php
if (isset($_POST['tombol_simpan']))
{
include 'koneksi.php';
$kueri = "insert into ekspor values ('$_POST[no]','$_POST[jenis_komoditas]','$_POST[tujuan_negara]','$_POST[milyar_usd]')";	
$go = mysqli_query($koneksi, $kueri);
header('location:read_ekspor.php');
}
?>
</div>
</center></body></html>