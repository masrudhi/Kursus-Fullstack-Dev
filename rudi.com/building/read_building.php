<html>
<head><link rel="stylesheet" href="bootstrap/css/bootstrap.css"/></head>
<body>
<center>
	<a href="create_building.php">Add Data</a>
	<form method="post" action="search_building.php">
		<br/><input name="kata_kunci" placeholder="Ketikan kata kunci..."/>
		<input type="submit" value="Cari!" class="btn btn-warning btn-sm">
	</form>
	<form method="post" action="sort_building.php">
		<select name="urutan">
				<option>--Urutkan berdasarkan--
			    <option value="rank_asc">Rank (Up)
			    <option value="rank_desc">Rank (Down)
			    <option value="building_name_asc">Building Name (A->Z)
			    <option value="building_name_desc">Building Name (Z->A)
			    <option value="city_asc">City (A->Z)
			    <option value="city_desc">City (Z->A)
			    <option value="country_asc">Country (A->Z)
			    <option value="country_desc">Country (Z->A)
			    <option value="height_asc">Height (Up)
			    <option value="height_desc">Height (Down)
			    <option value="floors_asc">Floors (Up)
			    <option value="floors_desc">Floors (Down)
			    <option value="year_completed_asc">Year Completed (Up)
			    <option value="year_completed_desc">Year Completed (Down)
			</select>
			<input type="submit" value="Urutankan!" class="btn btn-primary btn-sm">		
	</form>
<h3>Top 10 Tallest Building </h3><hr/>
<table class="table table-hover">
	<tr>
		<td>RANK<td>BUILDING NAME<td>CITY<td>COUNTRY<td>HEIGHT<td>FLOORS<td>YEAR COMPLETED<td>ACTION</tr>
        <?php
        include 'koneksi.php';
        $kueri = "select * from building";
        $go = mysqli_query($koneksi, $kueri);
        $kolom = mysqli_fetch_array($go);
        do {
        	?>
            <tr>
	            <td><?php echo $kolom['rank']  ?>
	            <td><?php echo $kolom['building_name'] ?>
	            <td><?php echo $kolom['city'] ?>
	            <td><?php echo $kolom['country'] ?>
	            <td><?php echo $kolom['height'] ?>
	            <td><?php echo $kolom['floors'] ?>
	            <td><?php echo $kolom['year_completed'] ?>
	            <td><a href="update_building.php?pk=<?php echo $kolom['rank'] ?>">Update</a>
            </tr>
            	<?php
        } while ($kolom =mysqli_fetch_array($go));
        ?>
</table>



</center></body></html>
