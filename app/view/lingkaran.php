<h1><?php echo $title ?></h1>

<a href="?m=lingkaran_add" class="btn btn-primary mb-3">Tambah</a>
<a href="?m=lingkaran_exp" target="blank" class="btn btn-primary mb-3">Export</a>

<table class="table table-striped">
	<tr>
		<th>ID Lingkaran</th>
		<th>Jari-jari</th>
		<th>Luas</th>
		<th>Aksi</th>
	</tr>

	<?php 
	foreach ($data as $key => $value) {
		?>
		<tr>
			<td><?php echo $value['id_lingkaran'] ?></td>
			<td><?php echo $value['jari_jari'] ?></td>
			<td><?php echo $value['luas'] ?></td>
			<td>
				<a href="?m=lingkaran_edit&id_lingkaran=<?php echo $value['id_lingkaran']?>" class="btn btn-info">Edit</a>
				<a href="?m=lingkaran_delete&id_lingkaran=<?php echo $value['id_lingkaran']?>" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php 
	}
	?>
</table>