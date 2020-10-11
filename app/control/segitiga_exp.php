<?php 
$title		= 'Data Segitiga';
$data 		= mysqli_query($koneksi, "SELECT * FROM segitiga_luas");
$content	= VIEW.'segitiga_exp.php'; 
include VIEW.'segitiga_exp.php';