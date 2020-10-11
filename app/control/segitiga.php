<?php 
/**
 *Ini adalah control untuk modul segitiga
 *
 * @var          $<element_name> (description)
 */
$no = 1;
$title		= 'Data Segitiga';
$data 		= mysqli_query($koneksi, "SELECT * FROM segitiga_luas");

$content	= VIEW.'segitiga.php';
include VIEW.'template.php';
?>