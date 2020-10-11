<h1><?php echo $title ?></h1>

<form action="?m=segitiga_edit" method="POST">
	<div class="form-group">
		<label>Alas</label>
		<input type="text" name="alas" class="form-control" value="<?php echo $segitiga_luas['alas'] ?>">
	</div>
	<div class="form-group">
		<label>Tinggi</label>
		<input type="text" name="tinggi" class="form-control" value="<?php echo $segitiga_luas['tinggi'] ?>">
	</div>
	<div class="form-group">
		<input type="hidden" name="id_segitiga" value="<?php echo $segitiga_luas['id_segitiga'] ?>">
		<button type="submit" class="btn btn-primary">Hitung</button>
	</div>
</form>