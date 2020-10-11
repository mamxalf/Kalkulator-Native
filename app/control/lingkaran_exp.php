<?php 
$title		= 'Data Lingkaran';
$data 		= mysqli_query($koneksi, "SELECT * FROM lingkaran_luas");
$content	= VIEW.'lingkaran_exp.php'; 
include VIEW.'lingkaran_exp.php';