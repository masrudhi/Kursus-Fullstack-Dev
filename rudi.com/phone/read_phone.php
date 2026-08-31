
<html>
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css "/>
</head>
<body>
<center>
	<h3>
		Top 10 Phone Sales in Africa
	</h3>
	<hr/>
	<form method="post" action="search_phone.php">
		<input name="kata_kunci" placeholder="ketik kata kunci... "/>
		<input type="submit" value="Cari!" class="btn btn-warning btn-sm "/> 
	</form>

	<table class="table table-hover">
	<tr>
		<td>COUNTRY
		<td>CITY
		<td>REGION
		<td>SEGMENT
		<td>SALES
		<td>PROFIT	
	</tr>
	<?php
	include 'koneksi.php';
	$kueri =  "select * from phone";
	$go = mysqli_query($koneksi,$kueri);
	$kolom = mysqli_fetch_array($go);
	do{
	?>
	<tr>
		<td><?php echo $kolom['country'] ?>
		<td><?php echo $kolom['city'] ?>
		<td><?php echo $kolom['region'] ?>
		<td><?php echo $kolom['segment'] ?>
		<td><?php echo $kolom['sales'] ?>
		<td><?php echo $kolom['profit'] ?>	
	</tr>
	<?php	
	}while($kolom = mysqli_fetch_array($go));
	?>
</table>

<hr/>
<h3>Northern Phone Sales & Profit</h3>
<table class="table table-bordered">
<tr bgcolor="maroon" style="color:white">
	<td>TOTAL SALES
	<td>AVERAGE SALES
	<td>MAX SALES
	<td>MIN SALES
	<td>TOTAL PROFIT
	<td>AVERAGE PROFIT
	<td>MAX PROFIT
	<td>MIN PROFIT
</tr>
<tr>
	<?php
	$kueri =  "select 
				round(sum(sales),2) as total_sales,
				round(avg(sales),2) as average_sales,
				round(max(sales),2) as max_sales,
				round(min(sales),2) as min_sales,
				round(sum(sales),2) as total_profit,
				round(avg(sales),2) as average_profit,
				round(max(sales),2) as max_profit,
				round(min(sales),2) as min_profit
	 from phone where region ='Northern' ";
	$go = mysqli_query($koneksi,$kueri);
	$kolom = mysqli_fetch_array($go);
	?>
	<tr>
		<td><?php echo $kolom['total_sales'] ?>
		<td><?php echo $kolom['average_sales'] ?>
		<td><?php echo $kolom['max_sales'] ?>
		<td><?php echo $kolom['min_sales'] ?>
		<td><?php echo $kolom['total_profit'] ?>
		<td><?php echo $kolom['average_profit'] ?>
		<td><?php echo $kolom['max_profit'] ?>
		<td><?php echo $kolom['min_profit'] ?>
</tr>
</table>

<hr/>
<h3>Western Phone Sales & Profit</h3>
<table class="table table-bordered">
<tr bgcolor="orange" style="color:white">
	<td>TOTAL SALES
	<td>AVERAGE SALES
	<td>MAX SALES
	<td>MIN SALES
	<td>TOTAL PROFIT
	<td>AVERAGE PROFIT
	<td>MAX PROFIT
	<td>MIN PROFIT
</tr>
<tr>
	<?php
	$kueri =  "select 
				round(sum(sales),2) as total_sales,
				round(avg(sales),2) as average_sales,
				round(max(sales),2) as max_sales,
				round(min(sales),2) as min_sales,
				round(sum(profit),2) as total_profit,
				round(avg(profit),2) as average_profit,
				round(max(profit),2) as max_profit,
				round(min(profit),2) as min_profit
	 from phone where region='Western' ";
	$go = mysqli_query($koneksi,$kueri);
	$kolom = mysqli_fetch_array($go);
	?>
	<tr>
		<td><?php echo $kolom['total_sales'] ?>
		<td><?php echo $kolom['average_sales'] ?>
		<td><?php echo $kolom['max_sales'] ?>
		<td><?php echo $kolom['min_sales'] ?>
		<td><?php echo $kolom['total_profit'] ?>
		<td><?php echo $kolom['average_profit'] ?>
		<td><?php echo $kolom['max_profit'] ?>
		<td><?php echo $kolom['min_profit'] ?>
</tr>
</table>

<hr/>
<h3>Middle Phone Sales & Profit</h3>
<table class="table table-bordered">
<tr bgcolor="green" style="color:white">
	<td>TOTAL SALES
	<td>AVERAGE SALES
	<td>MAX SALES
	<td>MIN SALES
	<td>TOTAL PROFIT
	<td>AVERAGE PROFIT
	<td>MAX PROFIT
	<td>MIN PROFIT
</tr>
<tr>
	<?php
	$kueri =  "select 
				round(sum(sales),2) as total_sales,
				round(avg(sales),2) as average_sales,
				round(max(sales),2) as max_sales,
				round(min(sales),2) as min_sales,
				round(sum(profit),2) as total_profit,
				round(avg(profit),2) as average_profit,
				round(max(profit),2) as max_profit,
				round(min(profit),2) as min_profit
	 from phone where region ='Middle' ";
	$go = mysqli_query($koneksi,$kueri);
	$kolom = mysqli_fetch_array($go);
	?>
	<tr>
		<td><?php echo $kolom['total_sales'] ?>
		<td><?php echo $kolom['average_sales'] ?>
		<td><?php echo $kolom['max_sales'] ?>
		<td><?php echo $kolom['min_sales'] ?>
		<td><?php echo $kolom['total_profit'] ?>
		<td><?php echo $kolom['average_profit'] ?>
		<td><?php echo $kolom['max_profit'] ?>
		<td><?php echo $kolom['min_profit'] ?>
</tr>
</table>

<hr/>
<h3>Southern Phone Sales & Profit</h3>
<table class="table table-bordered">
<tr bgcolor="blue" style="color:white">
	<td>TOTAL SALES
	<td>AVERAGE SALES
	<td>MAX SALES
	<td>MIN SALES
	<td>TOTAL PROFIT
	<td>AVERAGE PROFIT
	<td>MAX PROFIT
	<td>MIN PROFIT
</tr>
<tr>
	<?php
	$kueri =  "select 
				round(sum(sales),2) as total_sales,
				round(avg(sales),2) as average_sales,
				round(max(sales),2) as max_sales,
				round(min(sales),2) as min_sales,
				round(sum(profit),2) as total_profit,
				round(avg(profit),2) as average_profit,
				round(max(profit),2) as max_profit,
				round(min(profit),2) as min_profit
	 from phone where region ='Southern' ";
	$go = mysqli_query($koneksi,$kueri);
	$kolom = mysqli_fetch_array($go);
	?>
	<tr>
		<td><?php echo $kolom['total_sales'] ?>
		<td><?php echo $kolom['average_sales'] ?>
		<td><?php echo $kolom['max_sales'] ?>
		<td><?php echo $kolom['min_sales'] ?>
		<td><?php echo $kolom['total_profit'] ?>
		<td><?php echo $kolom['average_profit'] ?>
		<td><?php echo $kolom['max_profit'] ?>
		<td><?php echo $kolom['min_profit'] ?>
</tr>
</table>

<hr/>
<h3>Eastern Phone Sales & Profit</h3>
<table class="table table-bordered">
<tr bgcolor="magenta" style="color:white">
	<td>TOTAL SALES
	<td>AVERAGE SALES
	<td>MAX SALES
	<td>MIN SALES
	<td>TOTAL PROFIT
	<td>AVERAGE PROFIT
	<td>MAX PROFIT
	<td>MIN PROFIT
</tr>
<tr>
	<?php
	$kueri =  "select 
				round(sum(sales),2) as total_sales,
				round(avg(sales),2) as average_sales,
				round(max(sales),2) as max_sales,
				round(min(sales),2) as min_sales,
				round(sum(profit),2) as total_profit,
				round(avg(profit),2) as average_profit,
				round(max(profit),2) as max_profit,
				round(min(profit),2) as min_profit
	 from phone where region ='Eastern' ";
	$go = mysqli_query($koneksi,$kueri);
	$kolom = mysqli_fetch_array($go);
	?>
	<tr>
		<td><?php echo $kolom['total_sales'] ?>
		<td><?php echo $kolom['average_sales'] ?>
		<td><?php echo $kolom['max_sales'] ?>
		<td><?php echo $kolom['min_sales'] ?>
		<td><?php echo $kolom['total_profit'] ?>
		<td><?php echo $kolom['average_profit'] ?>
		<td><?php echo $kolom['max_profit'] ?>
		<td><?php echo $kolom['min_profit'] ?>
</tr>
</table>

<hr/>
<h3>Commercial Phone Sales & Profit</h3>
<table class="table table-bordered">
<tr bgcolor="gray" style="color:white">
	<td>TOTAL SALES
	<td>AVERAGE SALES
	<td>MAX SALES
	<td>MIN SALES
	<td>TOTAL PROFIT
	<td>AVERAGE PROFIT
	<td>MAX PROFIT
	<td>MIN PROFIT
</tr>
<tr>
	<?php
	$kueri =  "select 
				round(sum(sales),2) as total_sales,
				round(avg(sales),2) as average_sales,
				round(max(sales),2) as max_sales,
				round(min(sales),2) as min_sales,
				round(sum(profit),2) as total_profit,
				round(avg(profit),2) as average_profit,
				round(max(profit),2) as max_profit,
				round(min(profit),2) as min_profit
	 from phone where segment ='Commercial' ";
	$go = mysqli_query($koneksi,$kueri);
	$kolom = mysqli_fetch_array($go);
	?>
	<tr>
		<td><?php echo $kolom['total_sales'] ?>
		<td><?php echo $kolom['average_sales'] ?>
		<td><?php echo $kolom['max_sales'] ?>
		<td><?php echo $kolom['min_sales'] ?>
		<td><?php echo $kolom['total_profit'] ?>
		<td><?php echo $kolom['average_profit'] ?>
		<td><?php echo $kolom['max_profit'] ?>
		<td><?php echo $kolom['min_profit'] ?>
</tr>
</table>

<hr/>
<h3>Residential Phone Sales & Profit</h3>
<table class="table table-bordered">
<tr bgcolor="brown" style="color:white">
	<td>TOTAL SALES
	<td>AVERAGE SALES
	<td>MAX SALES
	<td>MIN SALES
	<td>TOTAL PROFIT
	<td>AVERAGE PROFIT
	<td>MAX PROFIT
	<td>MIN PROFIT
</tr>
<tr>
	<?php
	$kueri =  "select 
				round(sum(sales),2) as total_sales,
				round(avg(sales),2) as average_sales,
				round(max(sales),2) as max_sales,
				round(min(sales),2) as min_sales,
				round(sum(profit),2) as total_profit,
				round(avg(profit),2) as average_profit,
				round(max(profit),2) as max_profit,
				round(min(profit),2) as min_profit
	 from phone where segment ='Residential' ";
	$go = mysqli_query($koneksi,$kueri);
	$kolom = mysqli_fetch_array($go);
	?>
	<tr>
		<td><?php echo $kolom['total_sales'] ?>
		<td><?php echo $kolom['average_sales'] ?>
		<td><?php echo $kolom['max_sales'] ?>
		<td><?php echo $kolom['min_sales'] ?>
		<td><?php echo $kolom['total_profit'] ?>
		<td><?php echo $kolom['average_profit'] ?>
		<td><?php echo $kolom['max_profit'] ?>
		<td><?php echo $kolom['min_profit'] ?>
</tr>
</table>

<hr/>
<h3>Public Phone Sales & Profit</h3>
<table class="table table-bordered">
<tr bgcolor="lightblue" style="color:white">
	<td>TOTAL SALES
	<td>AVERAGE SALES
	<td>MAX SALES
	<td>MIN SALES
	<td>TOTAL PROFIT
	<td>AVERAGE PROFIT
	<td>MAX PROFIT
	<td>MIN PROFIT
</tr>
<tr>
	<?php
	$kueri =  "select 
				round(sum(sales),2) as total_sales,
				round(avg(sales),2) as average_sales,
				round(max(sales),2) as max_sales,
				round(min(sales),2) as min_sales,
				round(sum(profit),2) as total_profit,
				round(avg(profit),2) as average_profit,
				round(max(profit),2) as max_profit,
				round(min(profit),2) as min_profit
	 from phone where segment ='Public' ";
	$go = mysqli_query($koneksi,$kueri);
	$kolom = mysqli_fetch_array($go);
	?>
	<tr>
		<td><?php echo $kolom['total_sales'] ?>
		<td><?php echo $kolom['average_sales'] ?>
		<td><?php echo $kolom['max_sales'] ?>
		<td><?php echo $kolom['min_sales'] ?>
		<td><?php echo $kolom['total_profit'] ?>
		<td><?php echo $kolom['average_profit'] ?>
		<td><?php echo $kolom['max_profit'] ?>
		<td><?php echo $kolom['min_profit'] ?>
</tr>
</table>
</center></body></html>