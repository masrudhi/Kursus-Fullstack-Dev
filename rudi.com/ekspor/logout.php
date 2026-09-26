<?php

session_start();
include 'koneksi';
session_destroy();
header('location:index.php');
?>