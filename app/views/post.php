<?php require VDIR.'/header.php' ?>

<article>
	<h2><?= $post['title'] ?></h2>
	<p><?= $post['body'] ?></p>
	<p>
		<?php foreach (explode(',', $post['tags']) as $tag): ?>
		<a href="?url=default/tag/<?= $tag ?>" class="btn btn-link btn-sm"><?= $tag ?></a>
		<?php endforeach ?>
	</p>
</article>

<?php require VDIR.'/footer.php' ?>
