<html>
<head><link rel="stylesheet" href="bootstrap/css/bootstrap.css"/></head>
<body><center>
<form method="post" action="search_energy.php">
<br/><input name="kata_kunci" placeholder="ketik kata kunci..."/>
<input type="submit" name="Cari!" class="btn btn-warning">
</form>

<form method="post" action="sort_energy.php">
<br/><select name="urutan">
    
        <option>--Urutkan berdasarkan--
        <option value="rank_asc">Rank (Up)
        <option value="rank_desc">Rank (Down)
        <option value="country_asc">Country (A->Z)
        <option value="country_desc">Country (Z->A)
        <option value="city_asc">City (A->Z)
        <option value="city_desc">City (Z->A)
        <option value="continent_asc">Continent (A->Z)
        <option value="continent_desc">Continent (Z->A)
        <option value="energy_type_asc">Energy Type (A->Z)
        <option value="energy_type_desc">Energy Type (Z->A)
        <option value="production_mw_asc">Production MW (Up)
        <option value="production_mw_desc">Production MW (Down)
        <option value="co2_reduction_asc">CO2 Reduction (Up)
        <option value="co2_reduction_desc">CO2 Reduction (Down)
    </select>
    <input type="submit" value="Urutkan!" class="btn btn-info btn-sm"/>
</form>

<br/><a href="create_energy.php">Add Data</a>

<h3>Top 10 Renewable Energy Production</h3>
<hr/>
<table class="table table-hover">
<tr>
    <td>RANK<td>COUNTRY<td>CITY<td>CONTINENT<td>ENERGY TYPE<td>PRODUCTION (MW)<td>CO2 REDUCTION (TONS)
</tr>
<?php
include 'koneksi.php';
$kueri = "select * from energy";
$go = mysqli_query($koneksi,$kueri);
$kolom = mysqli_fetch_array($go);
do{
?>
<tr>
    <td><?php echo $kolom['rank'] ?>
    <td><?php echo $kolom['country'] ?>
    <td><?php echo $kolom['city'] ?>
    <td><?php echo $kolom['continent'] ?>
    <td><?php echo $kolom['energy_type'] ?>
    <td><?php echo $kolom['production_mw'] ?>
    <td><?php echo $kolom['co2_reduction'] ?>
</tr>
<?php
} while($kolom = mysqli_fetch_array($go) );
?>
</table>

<hr/>
<h3>PRODUCTION & CO2 REDUCTION ASIA </h3>
<table class="table table-bordered">
    <tr bgcolor="magenta" style="color: white;">
          <td>TOTAL PRODUCTION (MW)
          <td>AVERAGE PRODUCTION
          <td>MAX PRODUCTION
          <td>MIN PRODUCTION
          <td>TOTAL CO2 REDUCTION (TONS)
          <td>AVERAGE CO2 REDUCTION (TONS)
          <td>MAX CO2 REDUCTION (TONS)
          <td>MIN CO2 REDUCTION (TONS)
    </tr>
    <?php
    $kueri = "select sum(production_mw) as total_production,
                     avg(production_mw) as average_production,
                     max(production_mw) as max_production,
                     min(production_mw) as min_production,
                     sum(co2_reduction) as total_co2_reduction,
                     avg(co2_reduction) as average_co2_reduction,
                     max(co2_reduction) as max_co2_reduction,
                     min(co2_reduction) as min_co2_reduction
            from energy where continent='Asia' ";
    $go = mysqli_query($koneksi,$kueri);
    $kolom = mysqli_fetch_array($go);
    ?>
    <tr>
        <td><?php echo $kolom ['total_production'] ?>
        <td><?php echo $kolom ['average_production'] ?>
        <td><?php echo $kolom ['max_production'] ?>
        <td><?php echo $kolom ['min_production'] ?>
        <td><?php echo $kolom ['total_co2_reduction'] ?>
        <td><?php echo $kolom ['average_co2_reduction'] ?>
        <td><?php echo $kolom ['max_co2_reduction'] ?>
        <td><?php echo $kolom ['min_co2_reduction'] ?>
    </tr>  
    </table> 

<hr/>
<h3>PRODUCTION & CO2 REDUCTION AMERICA </h3>
<table class="table table-bordered">
    <tr bgcolor="green" style="color: white;">
          <td>TOTAL PRODUCTION (MW)
          <td>AVERAGE PRODUCTION
          <td>MAX PRODUCTION
          <td>MIN PRODUCTION
          <td>TOTAL CO2 REDUCTION (TONS)
          <td>AVERAGE CO2 REDUCTION (TONS)
          <td>MAX CO2 REDUCTION (TONS)
          <td>MIN CO2 REDUCTION (TONS)
    </tr>
    <?php
    $kueri = "select sum(production_mw) as total_production,
                     avg(production_mw) as average_production,
                     max(production_mw) as max_production,
                     min(production_mw) as min_production,
                     sum(co2_reduction) as total_co2_reduction,
                     avg(co2_reduction) as average_co2_reduction,
                     max(co2_reduction) as max_co2_reduction,
                     min(co2_reduction) as min_co2_reduction
            from energy where continent='America' ";
    $go = mysqli_query($koneksi,$kueri);
    $kolom = mysqli_fetch_array($go);
    ?>
    <tr>
        <td><?php echo $kolom ['total_production'] ?>
        <td><?php echo $kolom ['average_production'] ?>
        <td><?php echo $kolom ['max_production'] ?>
        <td><?php echo $kolom ['min_production'] ?>
        <td><?php echo $kolom ['total_co2_reduction'] ?>
        <td><?php echo $kolom ['average_co2_reduction'] ?>
        <td><?php echo $kolom ['max_co2_reduction'] ?>
        <td><?php echo $kolom ['min_co2_reduction'] ?>
    </tr>  
    </table> 

    <hr/>
<h3>PRODUCTION & CO2 REDUCTION UEROPE </h3>
<table class="table table-bordered">
    <tr bgcolor="yellow" style="color: white;">
          <td>TOTAL PRODUCTION (MW)
          <td>AVERAGE PRODUCTION
          <td>MAX PRODUCTION
          <td>MIN PRODUCTION
          <td>TOTAL CO2 REDUCTION (TONS)
          <td>AVERAGE CO2 REDUCTION (TONS)
          <td>MAX CO2 REDUCTION (TONS)
          <td>MIN CO2 REDUCTION (TONS)
    </tr>
    <?php
    $kueri = "select sum(production_mw) as total_production,
                     avg(production_mw) as average_production,
                     max(production_mw) as max_production,
                     min(production_mw) as min_production,
                     sum(co2_reduction) as total_co2_reduction,
                     avg(co2_reduction) as average_co2_reduction,
                     max(co2_reduction) as max_co2_reduction,
                     min(co2_reduction) as min_co2_reduction
            from energy where continent='Europe' ";
    $go = mysqli_query($koneksi,$kueri);
    $kolom = mysqli_fetch_array($go);
    ?>
    <tr>
        <td><?php echo $kolom ['total_production'] ?>
        <td><?php echo $kolom ['average_production'] ?>
        <td><?php echo $kolom ['max_production'] ?>
        <td><?php echo $kolom ['min_production'] ?>
        <td><?php echo $kolom ['total_co2_reduction'] ?>
        <td><?php echo $kolom ['average_co2_reduction'] ?>
        <td><?php echo $kolom ['max_co2_reduction'] ?>
        <td><?php echo $kolom ['min_co2_reduction'] ?>
    </tr>  
    </table> 

  <hr/>
<h3>PRODUCTION & CO2 REDUCTION SOLAR </h3>
<table class="table table-bordered">
    <tr bgcolor="blue" style="color: white;">
          <td>TOTAL PRODUCTION (MW)
          <td>AVERAGE PRODUCTION
          <td>MAX PRODUCTION
          <td>MIN PRODUCTION
          <td>TOTAL CO2 REDUCTION (TONS)
          <td>AVERAGE CO2 REDUCTION (TONS)
          <td>MAX CO2 REDUCTION (TONS)
          <td>MIN CO2 REDUCTION (TONS)
    </tr>
    <?php
    $kueri = "select sum(production_mw) as total_production,
                     avg(production_mw) as average_production,
                     max(production_mw) as max_production,
                     min(production_mw) as min_production,
                     sum(co2_reduction) as total_co2_reduction,
                     avg(co2_reduction) as average_co2_reduction,
                     max(co2_reduction) as max_co2_reduction,
                     min(co2_reduction) as min_co2_reduction
            from energy where energy_type='solar' ";
    $go = mysqli_query($koneksi,$kueri);
    $kolom = mysqli_fetch_array($go);
    ?>
    <tr>
        <td><?php echo $kolom ['total_production'] ?>
        <td><?php echo $kolom ['average_production'] ?>
        <td><?php echo $kolom ['max_production'] ?>
        <td><?php echo $kolom ['min_production'] ?>
        <td><?php echo $kolom ['total_co2_reduction'] ?>
        <td><?php echo $kolom ['average_co2_reduction'] ?>
        <td><?php echo $kolom ['max_co2_reduction'] ?>
        <td><?php echo $kolom ['min_co2_reduction'] ?>
    </tr>  
    </table> 
      <hr/>
<h3>PRODUCTION & CO2 REDUCTION WIND </h3>
<table class="table table-bordered">
    <tr bgcolor="bluelight" style="color: white;">
          <td>TOTAL PRODUCTION (MW)
          <td>AVERAGE PRODUCTION
          <td>MAX PRODUCTION
          <td>MIN PRODUCTION
          <td>TOTAL CO2 REDUCTION (TONS)
          <td>AVERAGE CO2 REDUCTION (TONS)
          <td>MAX CO2 REDUCTION (TONS)
          <td>MIN CO2 REDUCTION (TONS)
    </tr>
    <?php
    $kueri = "select sum(production_mw) as total_production,
                     avg(production_mw) as average_production,
                     max(production_mw) as max_production,
                     min(production_mw) as min_production,
                     sum(co2_reduction) as total_co2_reduction,
                     avg(co2_reduction) as average_co2_reduction,
                     max(co2_reduction) as max_co2_reduction,
                     min(co2_reduction) as min_co2_reduction
            from energy where energy_type='Wind' ";
    $go = mysqli_query($koneksi,$kueri);
    $kolom = mysqli_fetch_array($go);
    ?>
    <tr>
        <td><?php echo $kolom ['total_production'] ?>
        <td><?php echo $kolom ['average_production'] ?>
        <td><?php echo $kolom ['max_production'] ?>
        <td><?php echo $kolom ['min_production'] ?>
        <td><?php echo $kolom ['total_co2_reduction'] ?>
        <td><?php echo $kolom ['average_co2_reduction'] ?>
        <td><?php echo $kolom ['max_co2_reduction'] ?>
        <td><?php echo $kolom ['min_co2_reduction'] ?>
    </tr>  
    </table> 
      <hr/>
<h3>PRODUCTION & CO2 REDUCTION HYDROELECTRIC </h3>
<table class="table table-bordered">
    <tr bgcolor="red" style="color: white;">
          <td>TOTAL PRODUCTION (MW)
          <td>AVERAGE PRODUCTION
          <td>MAX PRODUCTION
          <td>MIN PRODUCTION
          <td>TOTAL CO2 REDUCTION (TONS)
          <td>AVERAGE CO2 REDUCTION (TONS)
          <td>MAX CO2 REDUCTION (TONS)
          <td>MIN CO2 REDUCTION (TONS)
    </tr>
    <?php
    $kueri = "select sum(production_mw) as total_production,
                     avg(production_mw) as average_production,
                     max(production_mw) as max_production,
                     min(production_mw) as min_production,
                     sum(co2_reduction) as total_co2_reduction,
                     avg(co2_reduction) as average_co2_reduction,
                     max(co2_reduction) as max_co2_reduction,
                     min(co2_reduction) as min_co2_reduction
            from energy where energy_type='Hydroelectric' ";
    $go = mysqli_query($koneksi,$kueri);
    $kolom = mysqli_fetch_array($go);
    ?>
    <tr>
        <td><?php echo $kolom ['total_production'] ?>
        <td><?php echo $kolom ['average_production'] ?>
        <td><?php echo $kolom ['max_production'] ?>
        <td><?php echo $kolom ['min_production'] ?>
        <td><?php echo $kolom ['total_co2_reduction'] ?>
        <td><?php echo $kolom ['average_co2_reduction'] ?>
        <td><?php echo $kolom ['max_co2_reduction'] ?>
        <td><?php echo $kolom ['min_co2_reduction'] ?>
    </tr>  
    </table> 
</center>
</body>
</html>
