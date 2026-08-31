
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<style>
        table, th, td { border: 1px solid black; padding: 4px 8px; border-collapse: collapse; }
    </style>
	</head>
<body>
<center>
	<h3>Top 10 Games Sales in History</h3>
	
	<!-- table-hover, striped, bordered, condensed, primary, succes, info, warning, danger -->
	<table class="table table-hover">
		<tr style="color:white; background-color:red;"
           onmouseover="this.style.color='blue'"
           onmouseout="this.style.color='white'">
		<!--<tr>
			<td>RANK
			<td>GAME
			<td>PLATFROM	
			<td>YEAR
			<td>GENRE
			<td>PUBLISHER
			<td>NA SALES
			<td>EU SALES
			<td>JP SALES	
			<td>OTHER SALES
		</tr>-->

		 <th>Rank</th><th>Game</th><th>Platform</th><th>Year</th><th>Genre</th>
        <th>Publisher</th><th>NA Sales</th><th>EU Sales</th><th>JP Sales</th><th>Other Sales</th>
    </tr>
<?php
$server 		='localhost';
$username		='root';
$password	    ='';
$database	    ='datagames';
$kueri	        ='select * from games';
$koneksi		= mysqli_connect($server,$username,$password,$database);
$go             = mysqli_query($koneksi,$kueri);
$kolom	        = mysqli_fetch_array($go);
do
{
?>
<tr>
	<td><?php echo $kolom['rank'] ?>
	<td><?php echo $kolom['game'] ?>
	<td><?php echo $kolom['platform'] ?>
	<td><?php echo $kolom['year'] ?>
	<td><?php echo $kolom['genre'] ?>
	<td><?php echo $kolom['publisher'] ?>
	<td><?php echo $kolom['na_sales'] ?>
	<td><?php echo $kolom['eu_sales'] ?>
	<td><?php echo $kolom['jp_sales'] ?>
	<td><?php echo $kolom['other_sales'] ?>
</tr>


<?php
}
while ($kolom =mysqli_fetch_array($go));
?>	

 </table>

 <hr/>
<h3>platform PS</h3>
<table class="table table-primary">
<tr style="color:white;" bgcolor="gray">	
	<td>TOTAL NA SALES
	<td>AVAREGE NA SALES 
	<td>MAX NA SALES 
	<td>MIN NA SALES 
	<td>TOTAL EU SALES 
	<td>AVAREGE EU SALES 
	<td>MAX EU SALES 
	<td>MIN EU SALES 
	<td>TOTAL JP SALES 
	<td>AVAREGE JP SALES 
	<td>MAX JP SALES 
	<td>MIN JP SALES 
	<td>TOTAL OTHER SALES 
	<td>AVAREGE OTHER SALES 
	<td>MAX OTHER SALES 
	<td>MIN OTHER SALES 
</tr>	

<?php
$kueri = "select round(sum(na_sales),2) as total_na_sales,
				 round(avg(na_sales),2) as avg_na_sales,
				 round(max(na_sales),2) as max_na_sales,
				 round(min(na_sales),2) as min_na_sales,
				 round(sum(eu_sales),2) as total_eu_sales,
				 round(avg(eu_sales),2) as avg_eu_sales,
				 round(max(eu_sales),2) as max_eu_sales,
				 round(min(eu_sales),2) as min_eu_sales,
				 round(sum(jp_sales),2) as total_jp_sales,
				 round(avg(jp_sales),2) as avg_jp_sales,
				 round(max(jp_sales),2) as max_jp_sales,
				 round(min(jp_sales),2) as min_jp_sales,
				 round(sum(other_sales),2) as total_other_sales,
				 round(avg(other_sales),2) as avg_other_sales,
				 round(max(other_sales),2) as max_other_sales,
				 round(min(other_sales),2) as min_other_sales
			from games where platform='PS' ";
		$go = mysqli_query($koneksi,$kueri);
		$kolom = mysqli_fetch_array($go);
?>
 <tr>
		<td><?php echo $kolom['total_na_sales'] ?>
		<td><?php echo $kolom['avg_na_sales'] ?>
		<td><?php echo $kolom['max_na_sales'] ?>
		<td><?php echo $kolom['min_na_sales'] ?>
		<td><?php echo $kolom['total_eu_sales'] ?>
		<td><?php echo $kolom['avg_eu_sales'] ?>
		<td><?php echo $kolom['max_eu_sales'] ?>
		<td><?php echo $kolom['min_eu_sales'] ?>
		<td><?php echo $kolom['total_jp_sales'] ?>
		<td><?php echo $kolom['avg_jp_sales'] ?>
		<td><?php echo $kolom['max_jp_sales'] ?>
	    <td><?php echo $kolom['min_jp_sales'] ?>
		<td><?php echo $kolom['total_other_sales'] ?>
		<td><?php echo $kolom['avg_other_sales'] ?>
		<td><?php echo $kolom['max_other_sales'] ?>
		<td><?php echo $kolom['min_other_sales'] ?>
	</tr>
</table>
<hr/>
<h3>platform PS2</h3>
<table class="table table-primary">
<tr style="color:white;" bgcolor="green">	
	<td>TOTAL NA SALES
	<td>AVAREGE NA SALES 
	<td>MAX NA SALES 
	<td>MIN NA SALES 
	<td>TOTAL EU SALES 
	<td>AVAREGE EU SALES 
	<td>MAX EU SALES 
	<td>MIN EU SALES 
	<td>TOTAL JP SALES 
	<td>AVAREGE JP SALES 
	<td>MAX JP SALES 
	<td>MIN JP SALES 
	<td>TOTAL OTHER SALES 
	<td>AVAREGE OTHER SALES 
	<td>MAX OTHER SALES 
	<td>MIN OTHER SALES 
</tr>	

<?php
$kueri = "select round(sum(na_sales),2) as total_na_sales,
				 round(avg(na_sales),2) as avg_na_sales,
				 round(max(na_sales),2) as max_na_sales,
				 round(min(na_sales),2) as min_na_sales,
				 round(sum(eu_sales),2) as total_eu_sales,
				 round(avg(eu_sales),2) as avg_eu_sales,
				 round(max(eu_sales),2) as max_eu_sales,
				 round(min(eu_sales),2) as min_eu_sales,
				 round(sum(jp_sales),2) as total_jp_sales,
				 round(avg(jp_sales),2) as avg_jp_sales,
				 round(max(jp_sales),2) as max_jp_sales,
				 round(min(jp_sales),2) as min_jp_sales,
				 round(sum(other_sales),2) as total_other_sales,
				 round(avg(other_sales),2) as avg_other_sales,
				 round(max(other_sales),2) as max_other_sales,
				 round(min(other_sales),2) as min_other_sales
			from games where platform='PS2' ";
		$go = mysqli_query($koneksi,$kueri);
		$kolom = mysqli_fetch_array($go);
?>
 <tr>
		<td><?php echo $kolom['total_na_sales'] ?>
		<td><?php echo $kolom['avg_na_sales'] ?>
		<td><?php echo $kolom['max_na_sales'] ?>
		<td><?php echo $kolom['min_na_sales'] ?>
		<td><?php echo $kolom['total_eu_sales'] ?>
		<td><?php echo $kolom['avg_eu_sales'] ?>
		<td><?php echo $kolom['max_eu_sales'] ?>
		<td><?php echo $kolom['min_eu_sales'] ?>
		<td><?php echo $kolom['total_jp_sales'] ?>
		<td><?php echo $kolom['avg_jp_sales'] ?>
		<td><?php echo $kolom['max_jp_sales'] ?>
	    <td><?php echo $kolom['min_jp_sales'] ?>
		<td><?php echo $kolom['total_other_sales'] ?>
		<td><?php echo $kolom['avg_other_sales'] ?>
		<td><?php echo $kolom['max_other_sales'] ?>
		<td><?php echo $kolom['min_other_sales'] ?>
	</tr>
</table>

<hr/>
<h3>platform X360</h3>
<table class="table table-primary">
<tr style="color:white;" bgcolor="purple">	
	<td>TOTAL NA SALES
	<td>AVAREGE NA SALES 
	<td>MAX NA SALES 
	<td>MIN NA SALES 
	<td>TOTAL EU SALES 
	<td>AVAREGE EU SALES 
	<td>MAX EU SALES 
	<td>MIN EU SALES 
	<td>TOTAL JP SALES 
	<td>AVAREGE JP SALES 
	<td>MAX JP SALES 
	<td>MIN JP SALES 
	<td>TOTAL OTHER SALES 
	<td>AVAREGE OTHER SALES 
	<td>MAX OTHER SALES 
	<td>MIN OTHER SALES 
</tr>	

<?php
$kueri = "select round(sum(na_sales),2) as total_na_sales,
				 round(avg(na_sales),2) as avg_na_sales,
				 round(max(na_sales),2) as max_na_sales,
				 round(min(na_sales),2) as min_na_sales,
				 round(sum(eu_sales),2) as total_eu_sales,
				 round(avg(eu_sales),2) as avg_eu_sales,
				 round(max(eu_sales),2) as max_eu_sales,
				 round(min(eu_sales),2) as min_eu_sales,
				 round(sum(jp_sales),2) as total_jp_sales,
				 round(avg(jp_sales),2) as avg_jp_sales,
				 round(max(jp_sales),2) as max_jp_sales,
				 round(min(jp_sales),2) as min_jp_sales,
				 round(sum(other_sales),2) as total_other_sales,
				 round(avg(other_sales),2) as avg_other_sales,
				 round(max(other_sales),2) as max_other_sales,
				 round(min(other_sales),2) as min_other_sales
			from games where platform='X360' ";
		$go = mysqli_query($koneksi,$kueri);
		$kolom = mysqli_fetch_array($go);
?>
 <tr>
		<td><?php echo $kolom['total_na_sales'] ?>
		<td><?php echo $kolom['avg_na_sales'] ?>
		<td><?php echo $kolom['max_na_sales'] ?>
		<td><?php echo $kolom['min_na_sales'] ?>
		<td><?php echo $kolom['total_eu_sales'] ?>
		<td><?php echo $kolom['avg_eu_sales'] ?>
		<td><?php echo $kolom['max_eu_sales'] ?>
		<td><?php echo $kolom['min_eu_sales'] ?>
		<td><?php echo $kolom['total_jp_sales'] ?>
		<td><?php echo $kolom['avg_jp_sales'] ?>
		<td><?php echo $kolom['max_jp_sales'] ?>
	    <td><?php echo $kolom['min_jp_sales'] ?>
		<td><?php echo $kolom['total_other_sales'] ?>
		<td><?php echo $kolom['avg_other_sales'] ?>
		<td><?php echo $kolom['max_other_sales'] ?>
		<td><?php echo $kolom['min_other_sales'] ?>
	</tr>


</table>
<hr/>
<h3>Genre Racing</h3>
<table class="table table-primary">
<tr style="color:white;" bgcolor="magenta">	
	<td>TOTAL NA SALES
	<td>AVAREGE NA SALES 
	<td>MAX NA SALES 
	<td>MIN NA SALES 
	<td>TOTAL EU SALES 
	<td>AVAREGE EU SALES 
	<td>MAX EU SALES 
	<td>MIN EU SALES 
	<td>TOTAL JP SALES 
	<td>AVAREGE JP SALES 
	<td>MAX JP SALES 
	<td>MIN JP SALES 
	<td>TOTAL OTHER SALES 
	<td>AVAREGE OTHER SALES 
	<td>MAX OTHER SALES 
	<td>MIN OTHER SALES 
</tr>	

<?php
$kueri = "select round(sum(na_sales),2) as total_na_sales,
				 round(avg(na_sales),2) as avg_na_sales,
				 round(max(na_sales),2) as max_na_sales,
				 round(min(na_sales),2) as min_na_sales,
				 round(sum(eu_sales),2) as total_eu_sales,
				 round(avg(eu_sales),2) as avg_eu_sales,
				 round(max(eu_sales),2) as max_eu_sales,
				 round(min(eu_sales),2) as min_eu_sales,
				 round(sum(jp_sales),2) as total_jp_sales,
				 round(avg(jp_sales),2) as avg_jp_sales,
				 round(max(jp_sales),2) as max_jp_sales,
				 round(min(jp_sales),2) as min_jp_sales,
				 round(sum(other_sales),2) as total_other_sales,
				 round(avg(other_sales),2) as avg_other_sales,
				 round(max(other_sales),2) as max_other_sales,
				 round(min(other_sales),2) as min_other_sales
			from games where genre='Racing' ";
		$go = mysqli_query($koneksi,$kueri);
		$kolom = mysqli_fetch_array($go);
?>
 <tr>
		<td><?php echo $kolom['total_na_sales'] ?>
		<td><?php echo $kolom['avg_na_sales'] ?>
		<td><?php echo $kolom['max_na_sales'] ?>
		<td><?php echo $kolom['min_na_sales'] ?>
		<td><?php echo $kolom['total_eu_sales'] ?>
		<td><?php echo $kolom['avg_eu_sales'] ?>
		<td><?php echo $kolom['max_eu_sales'] ?>
		<td><?php echo $kolom['min_eu_sales'] ?>
		<td><?php echo $kolom['total_jp_sales'] ?>
		<td><?php echo $kolom['avg_jp_sales'] ?>
		<td><?php echo $kolom['max_jp_sales'] ?>
	    <td><?php echo $kolom['min_jp_sales'] ?>
		<td><?php echo $kolom['total_other_sales'] ?>
		<td><?php echo $kolom['avg_other_sales'] ?>
		<td><?php echo $kolom['max_other_sales'] ?>
		<td><?php echo $kolom['min_other_sales'] ?>
	</tr>
</table>

</table>
<hr/>
<h3>Genre Sports</h3>
<table class="table table-primary">
<tr style="color:white;" bgcolor="blue">	
	<td>TOTAL NA SALES
	<td>AVAREGE NA SALES 
	<td>MAX NA SALES 
	<td>MIN NA SALES 
	<td>TOTAL EU SALES 
	<td>AVAREGE EU SALES 
	<td>MAX EU SALES 
	<td>MIN EU SALES 
	<td>TOTAL JP SALES 
	<td>AVAREGE JP SALES 
	<td>MAX JP SALES 
	<td>MIN JP SALES 
	<td>TOTAL OTHER SALES 
	<td>AVAREGE OTHER SALES 
	<td>MAX OTHER SALES 
	<td>MIN OTHER SALES 
</tr>	

<?php
$kueri = "select round(sum(na_sales),2) as total_na_sales,
				 round(avg(na_sales),2) as avg_na_sales,
				 round(max(na_sales),2) as max_na_sales,
				 round(min(na_sales),2) as min_na_sales,
				 round(sum(eu_sales),2) as total_eu_sales,
				 round(avg(eu_sales),2) as avg_eu_sales,
				 round(max(eu_sales),2) as max_eu_sales,
				 round(min(eu_sales),2) as min_eu_sales,
				 round(sum(jp_sales),2) as total_jp_sales,
				 round(avg(jp_sales),2) as avg_jp_sales,
				 round(max(jp_sales),2) as max_jp_sales,
				 round(min(jp_sales),2) as min_jp_sales,
				 round(sum(other_sales),2) as total_other_sales,
				 round(avg(other_sales),2) as avg_other_sales,
				 round(max(other_sales),2) as max_other_sales,
				 round(min(other_sales),2) as min_other_sales
			from games where genre='Sports' ";
		$go = mysqli_query($koneksi,$kueri);
		$kolom = mysqli_fetch_array($go);
?>
 <tr>
		<td><?php echo $kolom['total_na_sales'] ?>
		<td><?php echo $kolom['avg_na_sales'] ?>
		<td><?php echo $kolom['max_na_sales'] ?>
		<td><?php echo $kolom['min_na_sales'] ?>
		<td><?php echo $kolom['total_eu_sales'] ?>
		<td><?php echo $kolom['avg_eu_sales'] ?>
		<td><?php echo $kolom['max_eu_sales'] ?>
		<td><?php echo $kolom['min_eu_sales'] ?>
		<td><?php echo $kolom['total_jp_sales'] ?>
		<td><?php echo $kolom['avg_jp_sales'] ?>
		<td><?php echo $kolom['max_jp_sales'] ?>
	    <td><?php echo $kolom['min_jp_sales'] ?>
		<td><?php echo $kolom['total_other_sales'] ?>
		<td><?php echo $kolom['avg_other_sales'] ?>
		<td><?php echo $kolom['max_other_sales'] ?>
		<td><?php echo $kolom['min_other_sales'] ?>
	</tr>
</table>

</table>
<hr/>
<h3>Publisher Electronik Arts </h3>
<table class="table table-primary">
<tr style="color:white;" bgcolor="green">	
	<td>TOTAL NA SALES
	<td>AVAREGE NA SALES 
	<td>MAX NA SALES 
	<td>MIN NA SALES 
	<td>TOTAL EU SALES 
	<td>AVAREGE EU SALES 
	<td>MAX EU SALES 
	<td>MIN EU SALES 
	<td>TOTAL JP SALES 
	<td>AVAREGE JP SALES 
	<td>MAX JP SALES 
	<td>MIN JP SALES 
	<td>TOTAL OTHER SALES 
	<td>AVAREGE OTHER SALES 
	<td>MAX OTHER SALES 
	<td>MIN OTHER SALES 
</tr>	

<?php
$kueri = "select round(sum(na_sales),2) as total_na_sales,
				 round(avg(na_sales),2) as avg_na_sales,
				 round(max(na_sales),2) as max_na_sales,
				 round(min(na_sales),2) as min_na_sales,
				 round(sum(eu_sales),2) as total_eu_sales,
				 round(avg(eu_sales),2) as avg_eu_sales,
				 round(max(eu_sales),2) as max_eu_sales,
				 round(min(eu_sales),2) as min_eu_sales,
				 round(sum(jp_sales),2) as total_jp_sales,
				 round(avg(jp_sales),2) as avg_jp_sales,
				 round(max(jp_sales),2) as max_jp_sales,
				 round(min(jp_sales),2) as min_jp_sales,
				 round(sum(other_sales),2) as total_other_sales,
				 round(avg(other_sales),2) as avg_other_sales,
				 round(max(other_sales),2) as max_other_sales,
				 round(min(other_sales),2) as min_other_sales
			from games where publisher='Electronic Arts' ";
		$go = mysqli_query($koneksi,$kueri);
		$kolom = mysqli_fetch_array($go);
?>
 <tr>
		<td><?php echo $kolom['total_na_sales'] ?>
		<td><?php echo $kolom['avg_na_sales'] ?>
		<td><?php echo $kolom['max_na_sales'] ?>
		<td><?php echo $kolom['min_na_sales'] ?>
		<td><?php echo $kolom['total_eu_sales'] ?>
		<td><?php echo $kolom['avg_eu_sales'] ?>
		<td><?php echo $kolom['max_eu_sales'] ?>
		<td><?php echo $kolom['min_eu_sales'] ?>
		<td><?php echo $kolom['total_jp_sales'] ?>
		<td><?php echo $kolom['avg_jp_sales'] ?>
		<td><?php echo $kolom['max_jp_sales'] ?>
	    <td><?php echo $kolom['min_jp_sales'] ?>
		<td><?php echo $kolom['total_other_sales'] ?>
		<td><?php echo $kolom['avg_other_sales'] ?>
		<td><?php echo $kolom['max_other_sales'] ?>
		<td><?php echo $kolom['min_other_sales'] ?>
	</tr>
</table>
<hr/>
<h3>Publisher Konami </h3>
<table class="table table-primary">
<tr style="color:white;" bgcolor="Navy">	
	<td>TOTAL NA SALES
	<td>AVAREGE NA SALES 
	<td>MAX NA SALES 
	<td>MIN NA SALES 
	<td>TOTAL EU SALES 
	<td>AVAREGE EU SALES 
	<td>MAX EU SALES 
	<td>MIN EU SALES 
	<td>TOTAL JP SALES 
	<td>AVAREGE JP SALES 
	<td>MAX JP SALES 
	<td>MIN JP SALES 
	<td>TOTAL OTHER SALES 
	<td>AVAREGE OTHER SALES 
	<td>MAX OTHER SALES 
	<td>MIN OTHER SALES 
</tr>	

<?php
$kueri = "select round(sum(na_sales),2) as total_na_sales,
				 round(avg(na_sales),2) as avg_na_sales,
				 round(max(na_sales),2) as max_na_sales,
				 round(min(na_sales),2) as min_na_sales,
				 round(sum(eu_sales),2) as total_eu_sales,
				 round(avg(eu_sales),2) as avg_eu_sales,
				 round(max(eu_sales),2) as max_eu_sales,
				 round(min(eu_sales),2) as min_eu_sales,
				 round(sum(jp_sales),2) as total_jp_sales,
				 round(avg(jp_sales),2) as avg_jp_sales,
				 round(max(jp_sales),2) as max_jp_sales,
				 round(min(jp_sales),2) as min_jp_sales,
				 round(sum(other_sales),2) as total_other_sales,
				 round(avg(other_sales),2) as avg_other_sales,
				 round(max(other_sales),2) as max_other_sales,
				 round(min(other_sales),2) as min_other_sales
			from games where publisher='Konami' ";
		$go = mysqli_query($koneksi,$kueri);
		$kolom = mysqli_fetch_array($go);
?>
 <tr>
		<td><?php echo $kolom['total_na_sales'] ?>
		<td><?php echo $kolom['avg_na_sales'] ?>
		<td><?php echo $kolom['max_na_sales'] ?>
		<td><?php echo $kolom['min_na_sales'] ?>
		<td><?php echo $kolom['total_eu_sales'] ?>
		<td><?php echo $kolom['avg_eu_sales'] ?>
		<td><?php echo $kolom['max_eu_sales'] ?>
		<td><?php echo $kolom['min_eu_sales'] ?>
		<td><?php echo $kolom['total_jp_sales'] ?>
		<td><?php echo $kolom['avg_jp_sales'] ?>
		<td><?php echo $kolom['max_jp_sales'] ?>
	    <td><?php echo $kolom['min_jp_sales'] ?>
		<td><?php echo $kolom['total_other_sales'] ?>
		<td><?php echo $kolom['avg_other_sales'] ?>
		<td><?php echo $kolom['max_other_sales'] ?>
		<td><?php echo $kolom['min_other_sales'] ?>
	</tr>
</table>
<hr/>
<h3>Publisher Nintendo</h3>
<table class="table table-primary">
<tr style="color:white;" bgcolor="purple">	
	<td>TOTAL NA SALES
	<td>AVAREGE NA SALES 
	<td>MAX NA SALES 
	<td>MIN NA SALES 
	<td>TOTAL EU SALES 
	<td>AVAREGE EU SALES 
	<td>MAX EU SALES 
	<td>MIN EU SALES 
	<td>TOTAL JP SALES 
	<td>AVAREGE JP SALES 
	<td>MAX JP SALES 
	<td>MIN JP SALES 
	<td>TOTAL OTHER SALES 
	<td>AVAREGE OTHER SALES 
	<td>MAX OTHER SALES 
	<td>MIN OTHER SALES 
</tr>	

<?php
$kueri = "select round(sum(na_sales),2) as total_na_sales,
				 round(avg(na_sales),2) as avg_na_sales,
				 round(max(na_sales),2) as max_na_sales,
				 round(min(na_sales),2) as min_na_sales,
				 round(sum(eu_sales),2) as total_eu_sales,
				 round(avg(eu_sales),2) as avg_eu_sales,
				 round(max(eu_sales),2) as max_eu_sales,
				 round(min(eu_sales),2) as min_eu_sales,
				 round(sum(jp_sales),2) as total_jp_sales,
				 round(avg(jp_sales),2) as avg_jp_sales,
				 round(max(jp_sales),2) as max_jp_sales,
				 round(min(jp_sales),2) as min_jp_sales,
				 round(sum(other_sales),2) as total_other_sales,
				 round(avg(other_sales),2) as avg_other_sales,
				 round(max(other_sales),2) as max_other_sales,
				 round(min(other_sales),2) as min_other_sales
			from games where publisher='Nintendo' ";
		$go = mysqli_query($koneksi,$kueri);
		$kolom = mysqli_fetch_array($go);
?>
 <tr>
		<td><?php echo $kolom['total_na_sales'] ?>
		<td><?php echo $kolom['avg_na_sales'] ?>
		<td><?php echo $kolom['max_na_sales'] ?>
		<td><?php echo $kolom['min_na_sales'] ?>
		<td><?php echo $kolom['total_eu_sales'] ?>
		<td><?php echo $kolom['avg_eu_sales'] ?>
		<td><?php echo $kolom['max_eu_sales'] ?>
		<td><?php echo $kolom['min_eu_sales'] ?>
		<td><?php echo $kolom['total_jp_sales'] ?>
		<td><?php echo $kolom['avg_jp_sales'] ?>
		<td><?php echo $kolom['max_jp_sales'] ?>
	    <td><?php echo $kolom['min_jp_sales'] ?>
		<td><?php echo $kolom['total_other_sales'] ?>
		<td><?php echo $kolom['avg_other_sales'] ?>
		<td><?php echo $kolom['max_other_sales'] ?>
		<td><?php echo $kolom['min_other_sales'] ?>
	</tr>
</table>
</center>
</body>
</html>

