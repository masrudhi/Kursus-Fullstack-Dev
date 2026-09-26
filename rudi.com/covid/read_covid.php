<html>
<head><link rel="stylesheet" href="bootstrap/css/bootstrap.css"/></head>
<body>
<center>
	<h3>Top 10 covid in 2020 </h3>
	<hr/>
	<a href="create_covid.php">Add Data</a>
	<form method="post" action="search_covid.php">
		<br/><input name="kata_kunci" placeholder="Ketikan kata kunci..."/>
		<input type="submit" value="Cari!" class="btn btn-warning btn-sm">
	</form>
	<form method="post" action="sort_covid.php">
		<select name="urutan">
				<option>--Urutkan berdasarkan--
			    <option value="rank_asc">Rank (Up)
			    <option value="rank_desc">Rank (Down)
			    <option value="country_asc">Country (A->Z)
			    <option value="country_desc">Country (Z->A)
			    <option value="continent_asc">Continent (Up)
			    <option value="continent_desc">Continent (Down)
			    <option value="cases_2020_asc">Cases 2020 (Up)
			    <option value="cases_2020_desc">Cases 2020 (Down)
			    <option value="precent_population_asc">% of Population (Up)
			    <option value="precent_population_desc">% of Population  (Down)
			</select>
			<input type="submit" value="Urutankan!" class="btn btn-primary btn-sm">		
	</form>
	<br/>
<table class="table table-hover table-bordered">
	<tr style="background-color: deepskyblue;">
		<td>RANK<td>COUNTRY<td>CONTINENT<td>CASES IN 2020<td>% OF POPULATION<td>ACTION</tr>
        <?php
        include 'koneksi.php';
        $kueri = "select * from covid";
        $go = mysqli_query($koneksi, $kueri);
        $kolom = mysqli_fetch_array($go);
        do {
        	?>
            <tr>
	            <td><?php echo $kolom['rank']  ?>
	            <td><?php echo $kolom['country'] ?>
	            <td><?php echo $kolom['continent'] ?>
	            <td><?php echo $kolom['cases_2020'] ?>
	            <td><?php echo $kolom['precent_population'] ?>
	            <td><a href="update_covid.php?pk=<?php echo $kolom['rank'] ?>">Update</a> &nbsp;&nbsp;	            	<a href="delete_covid.php?pk=<?php echo $kolom['rank'] ?>">Delete</a>
            </tr>
            	<?php
        } while ($kolom =mysqli_fetch_array($go));
        ?>
</table>
<hr/>
<h3>CASES & % POPULATION AMERICA (2020)</h3>
<table class="table table-bordered">
		<tr bgcolor="purple" style="color:white">
			<td>TOTAL CASES<td>AVG CASES<td>MAX CASES<td>MIN CASES
			<td>TOTAL % POPULATION<td>AVG % POPULATION<td>MAX % POPULATION<td>MIN % POPULATION	
	<?php
       
        $kueri = "select sum(cases_2020) as total_cases,
        			avg(cases_2020) as avg_cases,
        			max(cases_2020) as max_cases,
        			min(cases_2020) as min_cases,
        			sum(precent_population) as total_population,
        			avg(precent_population) as avg_population,
        			max(precent_population) as max_population,
        			min(precent_population) as min_population
        			from covid where continent='America' ";
        $go = mysqli_query($koneksi, $kueri);
        $kolom = mysqli_fetch_array($go);
	?>
			<tr>
				<td><?php echo $kolom['total_cases']  ?>
	            <td><?php echo $kolom['avg_cases'] ?>
	            <td><?php echo $kolom['max_cases'] ?>
	            <td><?php echo $kolom['min_cases'] ?>
	            <td><?php echo $kolom['total_population'] ?>
	            <td><?php echo $kolom['avg_population'] ?>
	            <td><?php echo $kolom['max_population'] ?>
	            <td><?php echo $kolom['min_population'] ?>
	        </tr>

</table>

<hr/>
<h3>CASES & % POPULATION ASIA (2020)</h3>
<table class="table table-bordered">
		<tr bgcolor="green" style="color:white">
			<td>TOTAL CASES<td>AVG CASES<td>MAX CASES<td>MIN CASES
			<td>TOTAL % POPULATION<td>AVG % POPULATION<td>MAX % POPULATION<td>MIN % POPULATION	
	<?php
       
        $kueri = "select sum(cases_2020) as total_cases,
        			avg(cases_2020) as avg_cases,
        			max(cases_2020) as max_cases,
        			min(cases_2020) as min_cases,
        			sum(precent_population) as total_population,
        			avg(precent_population) as avg_population,
        			max(precent_population) as max_population,
        			min(precent_population) as min_population
        			from covid where continent='ASIA' ";
        $go = mysqli_query($koneksi, $kueri);
        $kolom = mysqli_fetch_array($go);
	?>
			<tr>
				<td><?php echo $kolom['total_cases']  ?>
	            <td><?php echo $kolom['avg_cases'] ?>
	            <td><?php echo $kolom['max_cases'] ?>
	            <td><?php echo $kolom['min_cases'] ?>
	            <td><?php echo $kolom['total_population'] ?>
	            <td><?php echo $kolom['avg_population'] ?>
	            <td><?php echo $kolom['max_population'] ?>
	            <td><?php echo $kolom['min_population'] ?>
	        </tr>

</table>

<hr/>
<h3>CASES & % POPULATION EUROPE (2020)</h3>
<table class="table table-bordered">
		<tr bgcolor="red" style="color:white">
			<td>TOTAL CASES<td>AVG CASES<td>MAX CASES<td>MIN CASES
			<td>TOTAL % POPULATION<td>AVG % POPULATION<td>MAX % POPULATION<td>MIN % POPULATION	
	<?php
       
        $kueri = "select sum(cases_2020) as total_cases,
        			avg(cases_2020) as avg_cases,
        			max(cases_2020) as max_cases,
        			min(cases_2020) as min_cases,
        			sum(precent_population) as total_population,
        			avg(precent_population) as avg_population,
        			max(precent_population) as max_population,
        			min(precent_population) as min_population
        			from covid where continent='Europe' ";
        $go = mysqli_query($koneksi, $kueri);
        $kolom = mysqli_fetch_array($go);
	?>
			<tr>
				<td><?php echo $kolom['total_cases']  ?>
	            <td><?php echo $kolom['avg_cases'] ?>
	            <td><?php echo $kolom['max_cases'] ?>
	            <td><?php echo $kolom['min_cases'] ?>
	            <td><?php echo $kolom['total_population'] ?>
	            <td><?php echo $kolom['avg_population'] ?>
	            <td><?php echo $kolom['max_population'] ?>
	            <td><?php echo $kolom['min_population'] ?>
	        </tr>

</table>

</center></body></html>
