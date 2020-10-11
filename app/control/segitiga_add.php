<?php 
/**
 *Ini adalah control untuk modul segitiga
 *
 * @var          $<element_name> (description)
 */

if(@$_POST){
	// $id_segitiga 	= $_POST['id_segitiga'];
	$alas 			= $_POST['alas'];
	$tinggi 		= $_POST['tinggi'];
	$luas 			= ($alas * $tinggi) / 2;

	mysqli_query($koneksi, "
		INSERT INTO segitiga_luas (alas, tinggi, luas)
		VALUES ('$alas', '$tinggi', '$luas')
		");

	header('Location: ?m=segitiga');
}

$title 	 = 'Tambah - Segitiga';
$content = VIEW.'segitiga_add.php';
include VIEW.'template.php';
?>