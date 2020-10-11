<?php 
/**
 *Ini adalah control untuk modul lingkaran
 *
 * @var          $<element_name> (description)
 */

const phi = 3.14;

if(@$_POST){
	$jari_jari 		= $_POST['jari_jari'];
	$luas 			= phi * ($jari_jari * $jari_jari);
	$id_lingkaran	= $_POST['id_lingkaran'];

	mysqli_query($koneksi, "
		UPDATE lingkaran_luas SET
		jari_jari 	= '$jari_jari',
		luas 		= '$luas'
		WHERE id_lingkaran = '$id_lingkaran'
		"); 

	header('Location: ?m=lingkaran');
}

if(@$_GET['id_lingkaran']){
	$title 	 = 'Edit - Lingkaran';

	$id_lingkaran 	= $_GET['id_lingkaran'];
	$data 		 	= mysqli_query($koneksi, "SELECT * FROM lingkaran_luas WHERE id_lingkaran = '$id_lingkaran'");
	$lingkaran_luas   = mysqli_fetch_assoc($data);
	
	$content = VIEW.'lingkaran_edit.php';
	include VIEW.'template.php';
}
?>