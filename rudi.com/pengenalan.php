<?php
echo '<b>selamat datang di php</b>';

//operator MTK
$x = 5;
$y = 2;
$kali = $x * $y; 
$bagi = $x / $y;
$tambah = $x + $y;
$kurang = $x - $y;
echo '<br/>hasil kali ialah '.$kali;
echo '<br/>hasil bagi ialah '.$bagi;
echo '<br/>hasil tambah ialah '.$tambah;
echo '<br/>hasil kurang ialah '.$kurang;

//strlen u/ menghitung panjang karakter termasuk spasi
$kota ='Jakarta panas';
echo'<br/>';
echo strlen($kota);
echo'<br/>';
echo strpos ($kota,'p');

//konstanta untuk menyimpan nilai tetap
echo "<br/>";
define('nilai_phi', 3.14);
echo 'Nilai phi ialah '.nilai_phi;

//perbandingan sederhana (berurutan)
echo'<br/>';
$bulan = 11;
switch ($bulan)
{

	case 1: echo 'Jan'; break;
	case 2: echo 'Feb'; break;
	case 3: echo 'Mar'; break;
	case 4: echo 'Apr'; break;
	case 5: echo 'Mei'; break;
	case 6: echo 'Jun'; break;
	case 7: echo 'Jul'; break;
	case 8: echo 'Agu'; break;
	case 9: echo 'Sep'; break;
	case 10: echo 'Okt'; break;
	case 11: echo 'Nov'; break;
	case 12: echo 'Des'; break;
	default: echo 'input salah!'; break;
	
}

//perbandingan kompleks (dengan operator == !=(tidak not) > < >= <= && )

echo '<br/>';
$negara = 'Thailand';

if ($negara=='Jepang')
 {echo 'Mata uang yen';}
elseif ($negara=='inggris') 
	{echo 'Mata uang pound';}
elseif ($negara=='Thailand') 
	{echo 'Mata uang baht';}
else
	{echo 'mata uang tidak terdaftar';}



echo '<br/>';
$cuaca = 'hujan';
if($cuaca !='hujan')
	{echo 'berangkat kuliah';}
else
	{echo 'tidak berangkat kuliah';}

echo '<br/>';
$nilai = 90;
if ($nilai>=90 && $nilai <=100) 
	{echo 'indek A';}
else if($nilai>=75 && $nilai<=90)
	{echo 'indek B';}
else if($nilai>=60 && $nilai<=75)
	{echo 'indek C';}
else if($nilai>=0 && $nilai<=60)
	{echo 'indek D';}
else
{echo 'input salah!';}	


echo '<br/>';
$bulan ='Feb';
$tanggal = 9;

if( ($bulan =="Mar" && $tanggal>=21) || ($bulan=="Apr" && $tanggal<=19) )
		{echo "Aries";}
	else if(( $bulan =="Apr" && $tanggal>=21) || ($bulan=="Mei" && $tanggal<=20)) 
		{echo "Taurus" ;}
	else if(( $bulan =="Mei" && $tanggal>=21) || ($bulan=="Jun" && $tanggal<=20)) 
		{echo "Gemini";}
	else if(( $bulan =="Jun" && $tanggal>=21) || ($bulan=="Jul" && $tanggal<=22)) 
		{echo "Cancer";}
	else if(( $bulan =="Jul" && $tanggal>=23) || ($bulan=="Agu" && $tanggal<=22)) 
		{echo"Leo";}
	else if(( $bulan =="Agu" && $tanggal>=23) || ($bulan=="Sep" && $tanggal<=22)) 
		{echo"Virgo";}
	else if(( $bulan =="Sep" && $tanggal>=23) || ($bulan=="Okt" && $tanggal<=22)) 
		{echo"Libra";}
	else if(( $bulan =="Okt" && $tanggal>=23) || ($bulan=="Nov" && $tanggal<=21) )
		{echo"Scorpio";}
	else if(( $bulan =="Nov" && $tanggal>=22) || ($bulan=="Des" && $tanggal<=21)) 
		{echo"Sagitarius";}
	else if(( $bulan =="Des" && $tanggal>=22) || ($bulan=="Jan" && $tanggal<=19)) 
		{echo"Carpricon";}
	else if(( $bulan =="Jan" && $tanggal>=20) || ($bulan=="Feb" && $tanggal <=18)) 
		{echo"Aquarius";}
	else if(( $bulan =="Feb" && $tanggal>=19) || ($bulan=="Mar" && $tanggal <=20) )
		{echo"Pisces";}
	else
		{echo("input salah");}

//perulangan for (increment)

echo '<br/>';
	for($no=1; $no<=10;  $no+=2) 
		{echo '<br/>'.$no;} 
//perulangan for mundur (decrement)	
echo '<br/>';
	for($no=100; $no>=0;  $no-=10) 
		{echo '<br/>'.$no;} 

//perulangan while maju (increment)
echo '<br/>';
$angka = 5;
while($angka<=20)
{
	$angka+=3;
	echo '<br/>'.$angka;
}

//perulangan while mundur (dencrement)

echo '<br/>';
$angka = 20;
while($angka>=0)
{
	$angka-=5;
	echo '<br/>'.$angka;
}

//perulangan do while maju (increment)

	echo '<br/>';
	$urutan = 0;
	do
{
	$urutan+=2;
	echo '<br/>' .$urutan;
	
}
while($urutan<=10);

//perulangan do while mundur (dencrement)

echo '<br/>';
$urutan = 100;
do
{
	$urutan-=20;
	echo '<br/>' .$urutan;
	
}
while($urutan>=0);

//Array bisa menyimpan lebih dari satu variabel/ banyak nilai

echo '<br/>';
$buah =['apel','jeruk','mangga','anggur'];
echo $buah[0];
?>