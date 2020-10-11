<?php 
/**
 *Ini adalah control untuk modul persegi
 *
 * @var          $<element_name> (description)
 */

if(@$_GET['id_segitiga']){
	$id_segitiga = $_GET['id_segitiga'];
	
	$data = mysqli_query($koneksi, "
		DELETE FROM segitiga_luas
		WHERE id_segitiga = '$id_segitiga'
		");

	header('Location: ?m=segitiga');
}
?>