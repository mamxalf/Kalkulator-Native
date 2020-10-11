<h1><?php echo $title ?></h1>

<form action="?m=persegi_edit" method="POST">
	<div class="form-group">
		<label>Sisi</label>
		<input type="text" name="sisi" class="form-control" value="<?php echo $persegi_luas['sisi'] ?>">
	</div>
	<div class="form-group">
		<input type="hidden" name="id_persegi" value="<?php echo $persegi_luas['id_persegi'] ?>">
		<button type="submit" class="btn btn-primary">Hitung</button>
	</div>
</form>