<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<title><?php echo isset($title) ? $title : 'Yönetim Paneli' ?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-3" style="max-width: 500px">

	<?php if (isset($message)): ?>
		<div class="alert alert-info"><?= $message ?></div>
	<?php endif ?>

	<form method="post" action="?url=admin/login">
	<div class="form-group">
		<label>Kullanıcı adı</label>
		<input type="text" class="form-control" name="username">
	</div>
	<div class="form-group">
		<label>Şifre</label>
		<input type="password" class="form-control" name="password">
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-success" value="Giriş">
	</div>
	</form>
	</div>
</body>
</html>