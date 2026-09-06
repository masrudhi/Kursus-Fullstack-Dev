
<html>
<head>
	
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css "/>

</head>
<body>
	<center>
		<h3>Top 10 Programming Language</h3>
		<form method="post" action="search_programmming.php">
			<br/><input name="kata_kunci" placeholder="ketik kata kunci... "/>
				<input type="submit" value="Cari!" class="btn btn-warning btn-sm" />
		</form>
		<form method="post" action="sort_programming.php">
			<br/><select name="urutan">
				<option>--urutkan berdasarkan--
				<option value="rank_asc">Rank (Up)	
				<option value="rank_desc">Rank (down)
				<option value="language_asc">Language (A->Z)
				<option value="language_desc">Language (Z->A)
				<option value="most_use_case_asc">Most use case (A->Z)
				<option value="most_use_case_desc")most USe Case (Z->A)
				<option value="year_salary_asc">Year Salary (Up)
				<option value="year_salary_desc">Year Salary (down)
				<option value="founder_asc">Founder (A->Z)
				<option value="founder_desc">Founder (Z->A)	
				</select>
				<input type="submit" value="urutkan!" class="btn btn-info btn-sm" />	
		</form>
		<table class="table table-hover">
		<tr bgcolor="blue" style="color:white">
			<td>RANK
			<td>LANGUANGE
			<td>MOST USE CASE
			<td>YEAR AVG SALARY (USD)
			<td>FOUNDER
		<tr/>
		<?php
		include 'koneksi.php';
		$kueri =  "select * from programming where 
		rank like '$_POST[kata_kunci]%' or
		language like '$_POST[kata_kunci]%' or
		most_use_case like '$_POST[kata_kunci]%' or
		year_salary like '$_POST[kata_kunci]%' or
		founder like '$_POST[kata_kunci]%'  ";
		$go = mysqli_query($koneksi,$kueri);
		$kolom = mysqli_fetch_array($go);
		do{
		?>	
		<tr>
			<td><?php echo $kolom ['rank'] ?>
			<td><?php echo $kolom ['language'] ?>
			<td><?php echo $kolom ['most_use_case'] ?>
			<td><?php echo $kolom ['year_salary'] ?>
			<td><?php echo $kolom ['founder'] ?>	
		</tr>

<?php
} while($kolom = mysqli_fetch_array($go));
?>
</table>

<hr/>
<h3>WEB DEVELOPMENT SALARY</h3>
<table class="table table-hover" >
<tr bgcolor="maroon" style="color:white">
	 <td>AVERAGE SALARY
	 <td>MAX SALARY
	 <td>MIN SALARY
	</tr> 	
	<?php
	$kueri ="select avg(year_salary) as avg_salary,
					max(year_salary) as max_salary,
					min(year_salary) as min_salary
					from programming where most_use_case='web development'	";
	$go = mysqli_query($koneksi,$kueri);
	$kolom = mysqli_fetch_array($go);				
	?>
	<tr>
		<td><?php echo $kolom['avg_salary'] ?>
		<td><?php echo $kolom['max_salary'] ?>
		<td><?php echo $kolom['min_salary'] ?>

	</tr>	
</table>

<hr/>
<h3>MOBILE APP DEVELOPMENT SALARY</h3>
<table class="table table-hover" />
<tr bgcolor="blue" style="color:white">
	 <td>AVERAGE SALARY
	 <td>MAX SALARY
	 <td>MIN SALARY
	</tr> 	
	<?php
	$kueri ="select avg(year_salary) as avg_salary,
					max(year_salary) as max_salary,
					min(year_salary) as min_salary
					from programming where most_use_case='mobile app development'	";
	$go = mysqli_query($koneksi,$kueri);
	$kolom = mysqli_fetch_array($go);				
	?>
	<tr>
		<td><?php echo $kolom['avg_salary'] ?>
		<td><?php echo $kolom['max_salary'] ?>
		<td><?php echo $kolom['min_salary'] ?>

	</tr>	
</table>

</center>
</body>
</html>