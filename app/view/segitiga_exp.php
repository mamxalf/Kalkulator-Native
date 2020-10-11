<!DOCTYPE html>
<html>
<head>
	<title>Report - Luas Segitiga</title>
	<style type="text/css">
		table{
			margin: 0px 0px 0px 50px;
		}
	</style>
</head>
<body>
	<?php
		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=data_luas_segitiga.xls");
	?>

	<h1>Report Luas Segitiga</h1>

	<table border="2 solid">
		<tr>
			<th>ID Segitiga</th>
			<th>Alas</th>
			<th>Tinggi</th>
			<th>Luas</th>
		</tr>

		<?php 
		foreach ($data as $key => $value) {
		?>
			<tr>
				<td><?php echo $value['id_segitiga'] ?></td>
				<td><?php echo $value['alas'] ?></td>
				<td><?php echo $value['tinggi'] ?></td>
				<td><?php echo $value['luas'] ?></td>
			</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>