<?php include 'protect.php'; ?>	
<html>
<head><link rel="stylesheet" href="bootstrap/css/bootstrap.css"/></head>
<body>
<center>
<h3> TOP 10 Ekspor Indonesia</h3>
<hr/>
<p align="right">
	<a href="logout.php" class="btn btn-danger">Logout</a>
</p>

<a href="create_ekspor.php">Tambah data</a>
<form method="post" action="search_ekspor.php">
	<br/><input name="kata_kunci" placeholder="ketikan kata_kunci...." />
	<input type="submit" value="Cari!" class="btn btn-warning btn-sm" />
</form>

<form method="post" action="sort_ekspor.php">
	<br/><select name="urutan">
		<option value>--Urutkan berdasarkan--
		<option value='no_asc'>No (Naik)
		<option value='no_desc'>No (Turun)
		<option value='jenis_komoditas_asc'>Jenis Komoditas (A->Z)
		<option value='jenis_komoditas_desc'>Jenis Komoditas (Z->A)
		<option value='tujuan_negara_asc'>Tujuan Negara (A->Z)
		<option value='tujuan_negara_desc'>Tujuan Negara (Z->A)
		<option value='milyar_usd_asc'>Nilai Milyar USD (Naik)
		<option value='milyar_usd_desc'>Nilai Milyar USD (Turun)
	</select>
	<input type="submit" value="Urutkan!" class="btn btn-info btn-sm" />
</form>

<table class="table table-hover">
	<tr>
		<td>NO</td>
		<td>JENIS KOMODITAS</td>
		<td>TUJUAN NEGARA</td>
		<td>NILAI MILYAR USD</td>
		<td colspan="2">ACTION</td>
	</tr>
	<?php
		include 'koneksi.php';
		$urutan = isset($_POST['urutan']) ? $_POST['urutan'] : '';

		if($urutan == 'no_asc') {
			$kueri = "select * from ekspor order by no asc";
		} else if($urutan == 'no_desc') {
			$kueri = "select * from ekspor order by no desc";
		} else if($urutan == 'jenis_komoditas_asc') {
			$kueri = "select * from ekspor order by jenis_komoditas asc";
		} else if($urutan == 'jenis_komoditas_desc') {
			$kueri = "select * from ekspor order by jenis_komoditas desc";
		} else if($urutan == 'tujuan_negara_asc') {
			$kueri = "select * from ekspor order by tujuan_negara asc";
		} else if($urutan == 'tujuan_negara_desc') {
			$kueri = "select * from ekspor order by tujuan_negara desc";
		} else if($urutan == 'milyar_usd_asc') {
			$kueri = "select * from ekspor order by milyar_usd asc";
		} else if($urutan == 'milyar_usd_desc') {
			$kueri = "select * from ekspor order by milyar_usd desc";
		} else {
			$kueri = "select * from ekspor";
		}
		
		$go = mysqli_query($koneksi, $kueri);
		while ($kolom = mysqli_fetch_array($go)) {
	?>
	<tr>
		<td><?php echo $kolom['no']; ?></td>
		<td><?php echo $kolom['jenis_komoditas']; ?></td>
		<td><?php echo $kolom['tujuan_negara']; ?></td>
		<td><?php echo $kolom['milyar_usd']; ?></td>
		<td><a href="update_ekspor.php?pk=<?php echo $kolom['no']; ?>">Update</a></td>
		<td><a href="delete_ekspor.php?pk=<?php echo $kolom['no']; ?>">Delete</a></td>
	</tr>
	<?php } ?>
</table>

<h3>EKSPOR KE TIONGKOK</h3>
<table class="table table-bordered">
	<tr bgcolor="orange" style="color:white">
		<td>TOTAL</td><td>RATA-RATA</td><td>TERBESAR</td><td>TERKECIL</td>
	</tr>	
	<?php
	$kueri = "select sum(milyar_usd) as total,
					 avg(milyar_usd) as rata,
					 max(milyar_usd) as terbesar,
					 min(milyar_usd) as terkecil
					 from ekspor where tujuan_negara='tiongkok'";
	$go = mysqli_query($koneksi, $kueri);
	$kolom = mysqli_fetch_array($go);
	?>
	<tr>
		<td><?php echo $kolom['total']; ?></td>
		<td><?php echo $kolom['rata']; ?></td>
		<td><?php echo $kolom['terbesar']; ?></td>
		<td><?php echo $kolom['terkecil']; ?></td>
	</tr>
</table>

<h3>EKSPOR KE AMERICA</h3>
<table class="table table-bordered">
	<tr bgcolor="blue" style="color:white">
		<td>TOTAL</td><td>RATA-RATA</td><td>TERBESAR</td><td>TERKECIL</td>
	</tr>	
	<?php
	$kueri = "select sum(milyar_usd) as total,
					 avg(milyar_usd) as rata,
					 max(milyar_usd) as terbesar,
					 min(milyar_usd) as terkecil
					 from ekspor where tujuan_negara='America'";
	$go = mysqli_query($koneksi, $kueri);
	$kolom = mysqli_fetch_array($go);
	?>
	<tr>
		<td><?php echo $kolom['total']; ?></td>
		<td><?php echo $kolom['rata']; ?></td>
		<td><?php echo $kolom['terbesar']; ?></td>
		<td><?php echo $kolom['terkecil']; ?></td>
	</tr>
</table>

<h3>EKSPOR KE JEPANG</h3>
<table class="table table-bordered">
	<tr bgcolor="yellow" style="color:white">
		<td>TOTAL</td><td>RATA-RATA</td><td>TERBESAR</td><td>TERKECIL</td>
	</tr>	
	<?php
	$kueri = "select sum(milyar_usd) as total,
					 avg(milyar_usd) as rata,
					 max(milyar_usd) as terbesar,
					 min(milyar_usd) as terkecil
					 from ekspor where tujuan_negara='jepang'";
	$go = mysqli_query($koneksi, $kueri);
	$kolom = mysqli_fetch_array($go);
	?>
	<tr>
		<td><?php echo $kolom['total']; ?></td>
		<td><?php echo $kolom['rata']; ?></td>
		<td><?php echo $kolom['terbesar']; ?></td>
		<td><?php echo $kolom['terkecil']; ?></td>
	</tr>
</table>

</center>
</body>
</html>