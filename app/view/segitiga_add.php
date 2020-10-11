<h1><?php echo $title ?></h1>

<form action="?m=segitiga_add" method="POST">
	<div class="form-group">
		<label>Alas</label>
		<input type="text" name="alas" class="form-control">
	</div>
	<div class="form-group">
		<label>Tinggi</label>
		<input type="text" name="tinggi" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Hitung</button>
	</div>
</form>