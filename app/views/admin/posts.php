<?php require VDIR.'/admin/header.php' ?>

<table class="table">
	<thead>
		<tr>
			<th>Başlık</th>
			<th>Etiketler</th>
			<th>Tarih</th>
			<th>İşlem</th>
		</tr>
	</thead>

	<tbody>
		
		<?php if (isset($posts) && !empty($posts)): ?>
			
			<?php foreach ($posts as $post): ?>
				<tr>
					<td><?= $post['title'] ?></td>
					<td><?= $post['tags'] ?></td>
					<td><?= $post['created'] ?></td>
					<td>
						<a href="?url=admin/delete/<?= $post['id'] ?>" class="btn btn-danger btn-sm">Sil</a>
					</td>
				</tr>
			<?php endforeach ?>

		<?php endif ?>

	</tbody>
</table>

<?php require VDIR.'/admin/footer.php' ?>
