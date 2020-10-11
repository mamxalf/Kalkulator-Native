<?php 
/**
 *Ini adalah control untuk modul lingkaran
 *
 * @var          $<element_name> (description)
 */

$title		= 'Data Lingkaran';
$data 		= mysqli_query($koneksi, "SELECT * FROM lingkaran_luas");

$content	= VIEW.'lingkaran.php';
include VIEW.'template.php';
?>