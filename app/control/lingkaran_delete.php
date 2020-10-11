<?php 
/**
 *Ini adalah control untuk modul lingkaran
 *
 * @var          $<element_name> (description)
 */

if(@$_GET['id_lingkaran']){
	$id_lingkaran = $_GET['id_lingkaran'];
	
	$data = mysqli_query($koneksi, "
		DELETE FROM lingkaran_luas
		WHERE id_lingkaran = '$id_lingkaran'
		");

	header('Location: ?m=lingkaran');
}
?>