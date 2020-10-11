<?php 
/**
 *Ini adalah control untuk modul persegi
 *
 * @var          $<element_name> (description)
 */

if(@$_POST){
	$sisi 			= $_POST['sisi'];
	$luas 			= $sisi * $sisi;
	$id_persegi		= $_POST['id_persegi'];

	mysqli_query($koneksi, "
		UPDATE persegi_luas SET
		sisi 	= '$sisi',
		luas 	= '$luas'
		WHERE id_persegi = '$id_persegi'
		"); 

	header('Location: ?m=persegi');
}

if(@$_GET['id_persegi']){
	$title 	 = 'Edit - Persegi';

	$id_persegi 	= $_GET['id_persegi'];
	$data 		 	= mysqli_query($koneksi, "SELECT * FROM persegi_luas WHERE id_persegi = '$id_persegi'");
	$persegi_luas   = mysqli_fetch_assoc($data);
	
	$content = VIEW.'persegi_edit.php';
	include VIEW.'template.php';
}
?>