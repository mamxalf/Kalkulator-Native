<?php 
/**
 *Ini adalah control untuk modul persegi
 *
 * @var          $<element_name> (description)
 */

$title		= 'Data Persegi';
$data 		= mysqli_query($koneksi, "SELECT * FROM persegi_luas");

$content	= VIEW.'persegi.php';
include VIEW.'template.php';
?>