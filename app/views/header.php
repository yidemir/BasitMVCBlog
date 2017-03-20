<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<title><?php echo isset($title) ? $title : 'MVC Uygulaması' ?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-3">

	<nav class="container">
		<ul class="list-inline">
			<li class="list-inline-item"><a href="?url=default">Ana Sayfa</a></li>
			<li class="list-inline-item"><a href="?url=admin">Yönetim</a></li>
		</ul>
	</nav>
	<hr>