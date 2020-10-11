<?php 
	$title 	 = "Aplikasi Kalkulator Bangun Datar";
	$content = VIEW.'home.php';

	include VIEW.'template.php';

	//chart

	$segitiga  = mysqli_query($koneksi, "SELECT * FROM segitiga_luas");
	while($row = mysqli_fetch_array($segitiga)){
		$id_segitiga[] = $row['id_segitiga'];	
	}
?>