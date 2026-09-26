<?php
        include 'koneksi.php';
        $kueri = "delete from covid where rank='$_GET[pk]' ";
        mysqli_query($koneksi, $kueri);
        header('location:read_covid.php');      
?>

    