<?php

session_start();
include 'koneksi.php';
if (isset($_POST['tombol_login'])) //jika user menekan tombol login
{
	$kueri = "select * from login where username='$_POST[username]' and password='$_POST[password]' ";
	$cek = mysqli_query($koneksi, $kueri);
	if(mysqli_num_rows($cek) > 0) // jika username & password berada dalam 1 baris didalam tabel db
	{
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
		header('location:read_ekspor.php');

	}

	else{
		echo "<script>alert('username/password salah!');</script>";
		echo "<script>window.location='index.php'; </script>";
		exit();
	}
}

?>