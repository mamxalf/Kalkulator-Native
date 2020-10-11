<?php 
/**
 *Ini adalah control untuk modul persegi
 *
 * @var          $<element_name> (description)
 */

if(@$_GET['id_persegi']){
	$id_persegi = $_GET['id_persegi'];
	
	$data = mysqli_query($koneksi, "
		DELETE FROM persegi_luas
		WHERE id_persegi = '$id_persegi'
		");

	header('Location: ?m=persegi');
}
?>