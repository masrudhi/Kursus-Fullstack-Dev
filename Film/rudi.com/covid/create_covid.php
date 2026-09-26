<html>
<head><link rel="stylesheet" href="bootstrap/css/bootstrap.css"/></head>
<body>
<center>
	<h3>Top 10 covid in 2020 </h3>
	<hr/>
	<div style="width: 30%;">
		<form method="post" action="create_covid.php">
		<br/>	
		<br/><input name="rank" placeholder="RANK" class="form-control" required />
		<br/><input name="country" placeholder="COUNTRY" class="form-control" required/>
		<br/><input name="continent" placeholder="CONTINENT" class="form-control" required/>	
		<br/><input name="cases_2020" placeholder="CASES IN 2020" class="form-control" required/>	
		<br/><input name="precent_population" placeholder="% OF POPULATION" class="form-control" required/>
		<br/><input type="submit" name="tombol_simpan" value="SAVE!" class="btn btn-success btn-sm" />
		<br/><a href="read_covid.php">BACK!</a>	
		</form>
	</div>

	<?php
		if(isset($_POST['tombol_simpan']))
		{
			include 'koneksi.php';
			$kueri = "insert into covid values(
			'$_POST[rank]',
			'$_POST[country]',
			'$_POST[continent]',
			'$_POST[cases_2020]',
			'$_POST[precent_population]'
			)";
	mysqli_query($koneksi,$kueri);
	header('location:read_covid.php');		

	}
	?>
</center>
</body>
</html>