<?php 
$title		= 'Data Persegi';
$data 		= mysqli_query($koneksi, "SELECT * FROM persegi_luas");
$content	= VIEW.'persegi_exp.php'; 
include VIEW.'persegi_exp.php';