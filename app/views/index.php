<?php require VDIR.'/header.php' ?>

<?php foreach ($posts as $post): ?>
<article>
	<h2><a href="?url=default/post/<?= $post['id'] ?>"><?= $post['title'] ?></a></h2>
	<p><?= $post['body'] ?></p>
	<p>
		<?php foreach (explode(',', $post['tags']) as $tag): ?>
		<a href="?url=default/tag/<?= $tag ?>" class="btn btn-link btn-sm"><?= $tag ?></a>
		<?php endforeach ?>
	</p>
</article>
<hr>
<?php endforeach ?>

<?php require VDIR.'/footer.php' ?>
