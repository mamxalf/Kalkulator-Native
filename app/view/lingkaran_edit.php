<h1><?php echo $title ?></h1>

<form action="?m=lingkaran_edit" method="POST">
	<div class="form-group">
		<label>Jari-jari</label>
		<input type="text" name="jari_jari" class="form-control" value="<?php echo $lingkaran_luas['jari_jari'] ?>">
	</div>
	<div class="form-group">
		<input type="hidden" name="id_lingkaran" value="<?php echo $lingkaran_luas['id_lingkaran'] ?>">
		<button type="submit" class="btn btn-primary">Hitung</button>
	</div>
</form>