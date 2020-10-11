<?php 
/**
 *Ini adalah control untuk modul persegi
 *
 * @var          $<element_name> (description)
 */

if(@$_POST){
	$sisi 			= $_POST['sisi'];
	$luas 			= $sisi * $sisi;

	mysqli_query($koneksi, "
		INSERT INTO persegi_luas (sisi, luas) VALUES ('$sisi', '$luas')");

	header('Location: ?m=persegi');
}

$title 	 = 'Tambah - Persegi';
$content = VIEW.'persegi_add.php';
include VIEW.'template.php';
?>