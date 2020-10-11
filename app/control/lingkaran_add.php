<?php 
/**
 *Ini adalah control untuk modul lingkaran
 *
 * @var          $<element_name> (description)
 */

const phi = 3.14;

if(@$_POST){
	$id_lingkaran 	= $_POST['id_lingkaran'];
	$jari_jari 		= $_POST['jari_jari'];
	$luas 			= phi * ($jari_jari * $jari_jari);

	mysqli_query($koneksi, "
		INSERT INTO lingkaran_luas (jari_jari, luas)
		VALUES ('$jari_jari', '$luas')
		");

	header('Location: ?m=lingkaran');
}

$title 	 = 'Tambah - Lingkaran';
$content = VIEW.'lingkaran_add.php';
include VIEW.'template.php';
?>