<html>
<head><link rel="stylesheet" href="bootstrap/css/bootstrap.css"/></head>
<body>
<center>
	<?php
		include 'koneksi.php';
		$kueri = "select * from covid where rank='$_GET[pk]'";
		$go = mysqli_query($koneksi,$kueri);
		$kolom = mysqli_fetch_array($go);
	?>	
	<div style="width: 30%;">
		<form method="post" action="update_covid.php">
		<br/>RANK
		<br/><input name="rank" value="<?php echo $kolom['rank'] ?>" class="form-control" readonly>
		<br/>COUNTRY
		<br/><input name="country" value="<?php echo $kolom['country'] ?>" class="form-control" />
		<br/>CONTINENT
		<br/><input name="continent" value="<?php echo $kolom['continent'] ?>" class="form-control" />
		<br/>CASES IN 2020
		<br/><input name="cases_2020" value="<?php echo $kolom['cases_2020'] ?>" class="form-control" />
		<br/>% OF POPULATION
		<br/><input name="precent_population" value="<?php echo $kolom['precent_population'] ?>" class="form-control" />
		<br/><input type="submit" name="tombol_simpan" value="SAVE!" class="btn btn-success btn-sm">
		<br/><a href="read_covid.php">BACK</a>
	</form>
</div>
<?php
	if(isset($_POST['tombol_simpan']))
	{
		$kueri ="update covid set 
				country='$_POST[country]',
				continent='$_POST[continent]',
				cases_2020='$_POST[cases_2020]',
				precent_population='$_POST[precent_population]'
				where rank='$_POST[rank]'
				";
		mysqli_query($koneksi, $kueri);
		header('location:read_covid.php');		
	}
?>

</center>
</body>
</html>


