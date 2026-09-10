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

			$urutan = isset($_POST['urutan']) ? $_POST['urutan'] : '';

			if ($urutan == 'rank_asc') {
			    $kueri = "SELECT * FROM building ORDER BY rank ASC";

			} else if ($urutan == 'rank_desc') {
			    $kueri = "SELECT * FROM building ORDER BY rank DESC";

			} else if ($urutan == 'building_name_asc') {
			    $kueri = "SELECT * FROM building ORDER BY building_name ASC";

			} else if ($urutan == 'building_name_desc') {
			    $kueri = "SELECT * FROM building ORDER BY building_name DESC";

			} else if ($urutan == 'city_asc') {
			    $kueri = "SELECT * FROM building ORDER BY city ASC";

			} else if ($urutan == 'city_desc') {
			    $kueri = "SELECT * FROM building ORDER BY city DESC";

			} else if ($urutan == 'country_asc') {
			    $kueri = "SELECT * FROM building ORDER BY country ASC";

			} else if ($urutan == 'country_desc') {
			    $kueri = "SELECT * FROM building ORDER BY country DESC";

			} else if ($urutan == 'height_asc') {
			    $kueri = "SELECT * FROM building ORDER BY height ASC";

			} else if ($urutan == 'height_desc') {
			    $kueri = "SELECT * FROM building ORDER BY height DESC";

			} else if ($urutan == 'floors_asc') {
			    $kueri = "SELECT * FROM building ORDER BY floors ASC";

			} else if ($urutan == 'floors_desc') {
			    $kueri = "SELECT * FROM building ORDER BY floors DESC";

			} else if ($urutan == 'year_completed_asc') {
			    $kueri = "SELECT * FROM building ORDER BY year_completed ASC";

			} else if ($urutan == 'year_completed_desc') {
			    $kueri = "SELECT * FROM building ORDER BY year_completed DESC";

			} else {
			    
			    $kueri = "SELECT * FROM building";
			}

			$go = mysqli_query($koneksi, $kueri);

			if (!$go) {
			    die("Query gagal: " . mysqli_error($koneksi));
			}

			while ($kolom = mysqli_fetch_array($go)) {
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
