<h1><?php echo $title ?></h1>

<a href="?m=persegi_add" class="btn btn-primary mb-3">Tambah</a>
<a href="?m=persegi_exp" target="blank" class="btn btn-primary mb-3">Export</a>

<table class="table table-striped">
	<tr>
		<th>ID Persegi</th>
		<th>Sisi</th>
		<th>Luas</th>
		<th>Aksi</th>
	</tr>

	<?php 
	foreach ($data as $key => $value) {
		?>
		<tr>
			<td><?php echo $value['id_persegi'] ?></td>
			<td><?php echo $value['sisi'] ?></td>
			<td><?php echo $value['luas'] ?></td>
			<td>
				<a href="?m=persegi_edit&id_persegi=<?php echo $value['id_persegi']?>" class="btn btn-info">Edit</a>
				<a href="?m=persegi_delete&id_persegi=<?php echo $value['id_persegi']?>" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php 
	}
	?>
</table>