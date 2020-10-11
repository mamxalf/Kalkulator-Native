<?php 
/**
 *Ini adalah control untuk modul segitiga
 *
 * @var          $<element_name> (description)
 */

if(@$_POST){
	$alas 			= $_POST['alas'];
	$tinggi 		= $_POST['tinggi'];
	$luas 			= ($alas * $tinggi) / 2;
	$id_segitiga	= $_POST['id_segitiga'];

	mysqli_query($koneksi, "
		UPDATE segitiga_luas SET
		alas 	= '$alas',
		tinggi 	= '$tinggi',
		luas 	= '$luas'
		WHERE id_segitiga = '$id_segitiga'
		"); 

	header('Location: ?m=segitiga');
}

if(@$_GET['id_segitiga']){
	$title 	 = 'Edit - Segitiga';

	$id_segitiga 	= $_GET['id_segitiga'];
	$data 		 	= mysqli_query($koneksi, "SELECT * FROM segitiga_luas WHERE id_segitiga = '$id_segitiga'");
	$segitiga_luas  = mysqli_fetch_assoc($data);
	
	$content = VIEW.'segitiga_edit.php';
	include VIEW.'template.php';
}
?>