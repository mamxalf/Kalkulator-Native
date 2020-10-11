<h1><?php echo $title ?></h1>

<a href="?m=segitiga_add" class="btn btn-primary mb-3">Tambah</a>
<a href="?m=segitiga_exp" target="blank" class="btn btn-primary mb-3">Export</a>

<table class="table table-striped">
	<tr>
		<th>Nomor</th>
		<th>ID Segitiga</th>
		<th>Alas</th>
		<th>Tinggi</th>
		<th>Luas</th>
		<th>Aksi</th>
	</tr>

	<?php 
	foreach ($data as $key => $value) {
		?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?php echo $value['id_segitiga'] ?></td>
			<td><?php echo $value['alas'] ?></td>
			<td><?php echo $value['tinggi'] ?></td>
			<td><?php echo $value['luas'] ?></td>
			<td>
				<a href="?m=segitiga_edit&id_segitiga=<?php echo $value['id_segitiga']?>" class="btn btn-info">Edit</a>
				<a href="?m=segitiga_delete&id_segitiga=<?php echo $value['id_segitiga']?>" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php 
	}
	?>
</table>