<html>
<head><link rel="stylesheet" href="bootstrap/css/bootstrap.css"/></head>
<body>
<center>
	<div style="width: 30%;">
		<form method="post" action="create_building.php">
		<br/><input name="rank" placeholder="RANK" class="form-control"/>
		<br/><input name="building_name" placeholder="BUILDING NAME" class="form-control"/>
		<br/><input name="city" placeholder="CITY" class="form-control"/>
		<br/><input name="country" placeholder="COUNTRY" class="form-control"/>
		<br/><input name="height" placeholder="HEIGHT (m)" class="form-control"/>	
		<br/><input name="floors" placeholder="FLOORS" class="form-control"/>	
		<br/><input name="year_completed" placeholder="YEAR COMPLETED" class="form-control"/>
		<br/><input type="submit" name="tombol_simpan" value="SAVE!" class="btn btn-success btn-sm" />
		<br/><a href="read_building.php">BACK</a>	
		</form>
	</div>

	<?php
		if(isset($_POST['tombol_simpan']))
		{
			include 'koneksi.php';
			$kueri = "insert into building values(
			'$_POST[rank]',
			'$_POST[building_name]',
			'$_POST[city]',
			'$_POST[country]',
			'$_POST[height]',
			'$_POST[floors]',
			'$_POST[year_completed]'
			)";
	mysqli_query($koneksi,$kueri);
	header('location:read_building.php');		

	}
	?>
</center>
</body>
</html>