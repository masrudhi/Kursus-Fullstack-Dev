<?php include 'protect.php'
?>	
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
	<form action="post" action="sort_ekspor.php">
		<br/><select name="urutan">
        <option>--Urutkan berdasarkan--
        <option value="no_asc">No (Naik)
        <option value="no_desc">No (Turun)
        <option value="jenis_komoditas_asc">Jenis Komoditas (A->Z)
        <option value="jenis_komoditas_desc">Jenis Komoditas (Z->A)
        <option value="tujuan_negara_asc">Tujuan Negara (A->Z)
        <option value="tujuan_negara_desc">Tujuan Negara (Z->A)
        <option value="milyar_usd_asc">Nilai Milyar USD (Naik)
        <option value="milyar_usd_desc">Nilai Milyar USD (Turun)
    </select>
    <input type="submit" value="Urutkan!" class="btn btn-info btn-sm" />

	</form> 

	<table class="table table-hover">
		<tr>
			<td>NO<td>JENIS KOMODITAS <td>TUJUAN NEGARA <td> NILAI MILYAR USD <td> ACTION</tr>
				<?php
					include 'koneksi.php';
					$kueri = "select * from ekspor";
					$go = mysqli_query($koneksi, $kueri);
					$kolom = mysqli_fetch_array($go);

					do{
					?>
					<tr>
							<td><?php echo $kolom['no'] ?>
							<td><?php echo $kolom['jenis_komoditas'] ?>
							<td><?php echo $kolom['tujuan_negara'] ?>
							<td><?php echo $kolom['milyar_usd'] ?>
							<td><a href="update_ekspor.php?pk=<?php echo $kolom['no'] ?> ">Update</a>
							<td><a href="delete_ekspor.php?pk=<?php echo $kolom['no'] ?> ">Delete</a>	

						</tr>
						<?php		
					} while ($kolom = mysqli_fetch_array($go));
				?>
		

	</table>

<h3>EKSPOR KE TIONGKOK</h3>
	<table class="table table-bondered">
		<tr bgcolor="orange" style="color:white">
			<td>TOTAL <td>RATA-RATA <td>TERBESAR <td>TERKECIL
		</tr>	
		<?php
		$kueri = "select sum(milyar_usd) as total,
						 avg(milyar_usd) as rata,
						 max(milyar_usd) as terbesar,
						 sum(milyar_usd) as terkecil
						 from ekspor where tujuan_negara= 'tiongkok' ";
			$go = mysqli_query($koneksi, $kueri);
       		$kolom = mysqli_fetch_array($go);
	?>
			<tr>
				<td><?php echo $kolom['total']  ?>
	            <td><?php echo $kolom['rata'] ?>
	            <td><?php echo $kolom['terbesar'] ?>
	            <td><?php echo $kolom['terkecil'] ?>
			<tr>
	</table>

<h3>EKSPOR KE AMERICA</h3>
	<table class="table table-bondered">
		<tr bgcolor="blue" style="color:white">
			<td>TOTAL <td>RATA-RATA <td>TERBESAR <td>TERKECIL
		</tr>	
		<?php
		$kueri = "select sum(milyar_usd) as total,
						avg(milyar_usd) as rata,
						max(milyar_usd) as terbesar,
						sum(milyar_usd) as terkecil
						from ekspor where tujuan_negara='Amerika serikat'";
						 $go = mysqli_query($koneksi, $kueri);
       					 $kolom = mysqli_fetch_array($go);
		?>
		<tr>
				<td><?php echo $kolom['total']  ?>
	            <td><?php echo $kolom['rata'] ?>
	            <td><?php echo $kolom['terbesar'] ?>
	            <td><?php echo $kolom['terkecil'] ?>
			<tr>
	</table>
	<h3>EKSPOR KE JEPANG</h3>
	<table class="table table-bondered">
		<tr bgcolor="green" style="color:white">
			<td>TOTAL <td>RATA-RATA <td>TERBESAR <td>TERKECIL
		</tr>	
		<?php
		$kueri = "select sum(milyar_usd) as total,
						avg(milyar_usd) as rata,
						max(milyar_usd) as terbesar,
						sum(milyar_usd) as terkecil
						from ekspor where tujuan_negara='jepang'";
						 $go = mysqli_query($koneksi, $kueri);
       					 $kolom = mysqli_fetch_array($go);
			?>
			<tr>
				<td><?php echo $kolom['total']  ?>
	            <td><?php echo $kolom['rata'] ?>
	            <td><?php echo $kolom['terbesar'] ?>
	            <td><?php echo $kolom['terkecil'] ?>
			<tr>
	</table>

</center>
</body>
</html>