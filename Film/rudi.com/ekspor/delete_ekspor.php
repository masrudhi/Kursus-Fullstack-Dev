<?php
include 'koneksi.php';
$kueri = "delete from ekspor where no='$_GET[pk]' ";
mysqli_query($koneksi, $kueri);
header('location:read_ekspor.php');
?>