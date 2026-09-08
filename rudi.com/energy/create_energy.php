<html>
<head><link rel="stylesheet" href="bootstrap/css/bootstrap.css"/></head>
<body><center>
<div style="width: 30%;">
<form method="post" action="create_energy.php">
    <br/><input class="form-control" name="rank" placeholder="Rank"/>
    <br/><input class="form-control" name="country" placeholder="Country"/>
    <br/><input class="form-control" name="city" placeholder="City"/>
    <br/><input class="form-control" name="continent" placeholder="Continent"/>
    <br/><input class="form-control" name="energy_type" placeholder="Energy Type"/>
    <br/><input class="form-control" name="production_mw" placeholder="Production (MW)"/>
    <br/><input class="form-control" name="co2_reduction" placeholder="CO2 Reduction (Tons)"/>
    <br/><input type="submit" name="tombol_simpan" value="SAVE" class="btn btn-success btn-sm"/>
    
    <a href="read_energy.php" class="btn btn-warning btn-sm text-white" style="text-decoration: none;">BACK</a>
    
</form>
<?php
if(isset($_POST['tombol_simpan']))
{
    include 'koneksi.php';
    $kueri = "insert into energy values('$_POST[rank]','$_POST[country]','$_POST[city]','$_POST[continent]','$_POST[energy_type]','$_POST[production_mw]','$_POST[co2_reduction]')";
    mysqli_query($koneksi, $kueri);
    header('location:read_energy.php');
}
?>
</div>
</center></body></html>