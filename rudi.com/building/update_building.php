<html>
<head><link rel="stylesheet" href="bootstrap/css/bootstrap.css"/></head>
<body>
<center>
	<?php
		include 'koneksi.php';
		$kueri = "select * from building where rank='$_GET[pk]'";
		$go = mysqli_query($koneksi,$kueri);
		$kolom = mysqli_fetch_array($go);
	?>	
	<div style="width: 30%;">
		<form method="post" action="update_building.php">
		<br/>RANK
		<br/><input name="rank" value="<?php echo $kolom['rank'] ?>" class="form-control" readonly>
		<br/>BUILDING NAME
		<br/><input name="building_name" value="<?php echo $kolom['building_name'] ?>" class="form-control" />
		<br/>COUNTRY
		<br/><input name="country" value="<?php echo $kolom['country'] ?>" class="form-control" />
		<br/>CITY
		<br/><input name="city" value="<?php echo $kolom['city'] ?>" class="form-control" />
		<br/>HEIGHT (m)
		<br/><input name="height" value="<?php echo $kolom['height'] ?>" class="form-control" />
		<br/>FLOORS
		<br/><input name="floors" value="<?php echo $kolom['floors'] ?>" class="form-control" />
		<br/>YEAR COMPLETED 
		<br/><input name="year_completed" value="<?php echo $kolom['year_completed'] ?>" class="form-control" />
		<br/><input type="submit" name="tombol_simpan" value="SAVE!" class="btn btn-success btn-sm">
		<br/><a href="read_building.php">BACK</a>
	</form>
</div>
<?php
	if(isset($_POST['tombol_simpan']))
	{
		$kueri ="update building set 
				building_name='$_POST[building_name]',
				country='$_POST[country]',
				city='$_POST[city]',
				height='$_POST[height]',
				floors='$_POST[floors]',
				year_completed='$_POST[year_completed]'
				where rank='$_POST[rank]'
				";
		mysqli_query($koneksi, $kueri);
		header('location:read_building.php');		
	}
?>

</center>
</body>
</html>


