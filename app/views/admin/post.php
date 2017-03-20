<?php require VDIR.'/admin/header.php' ?>

<form method="post" action="?url=admin/new">

<div class="form-group">
	<label>Başlık</label>
	<input type="text" class="form-control" name="title">
</div>

<div class="form-group">
	<label>İçerik</label>
	<textarea class="form-control" name="body" rows="10"></textarea>
</div>

<div class="form-group">
	<label>Etiketler</label>
	<input type="text" class="form-control" name="tags" onkeyup="this.value=this.value.replace(', ', ',')">
</div>

<div class="form-group">
	<input type="submit" class="btn btn-success" value="Kaydet">
</div>

</form>

<?php require VDIR.'/admin/footer.php' ?>
