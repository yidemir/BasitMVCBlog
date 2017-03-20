<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<title><?php echo isset($title) ? $title : 'MVC Uygulaması' ?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-3">

	<?php if (isset($message)): ?>
		<div class="alert alert-info"><?= $message ?></div>
	<?php endif ?>

		<nav>
			<ul class="list-inline">
				<li class="list-inline-item"><a href="?url=admin/index">Ana Sayfa</a></li>
				<li class="list-inline-item"><a href="?url=admin/posts">Gönderiler</a></li>
				<li class="list-inline-item"><a href="?url=admin/new">Yeni Gönderi</a></li>
				<li class="list-inline-item"><a href="?url=admin/logout">Çıkış</a></li>
			</ul>
		</nav>
		<hr>