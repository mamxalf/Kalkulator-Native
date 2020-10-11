<!DOCTYPE html>
<html>
<head>
	<title>Report - Luas Persegi</title>
	<style type="text/css">
		table{
			margin: 0px 0px 0px 50px;
		}
	</style>
</head>
<body>
	<?php
		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=data_luas_persegi.xls");
	?>

	<h1>Report Luas Persegi</h1>

	<table border="2 solid">
		<tr>
			<th>ID Persegi</th>
			<th>Sisi</th>
			<th>Luas</th>
		</tr>

		<?php 
		foreach ($data as $key => $value) {
		?>
			<tr>
				<td><?php echo $value['id_persegi'] ?></td>
				<td><?php echo $value['sisi'] ?></td>
				<td><?php echo $value['luas'] ?></td>
			</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>