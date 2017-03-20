<?php

class defaultController extends controller
{
	/**
	 * Ana sayfa, son gönderileri listeler
	 */
	public function indexAction()
	{
		// Sayfa başlığını belirliyoruz
		$data['title'] = 'Ana Sayfa';

		// Modelimizi değişkene aktarıyoruz
		$postModel = $this->model('post');

		// view'da kullanmak üzere posts değişkenine
		// post modelindeki bütün gönderileri aktarıyoruz
		$data['posts'] = $postModel->getAll();

		// Görünüm dosyamızı yorumlatıyoruz
		return $this->render('index', $data);
	}

	/**
	 * ID'ye göre gönderi gösterir
	 */
	public function postAction($id)
	{
		$postModel = $this->model('post');

		// ID'ye göre gönderimizi çekiyoruz
		$post = $postModel->get($id);

		$data['title'] = $post['title'];
		$data['post'] = $post;

		return $this->render('post', $data);
	}

	/**
	 * Etikete göre gönderileri listeler
	 */
	public function tagAction($tag)
	{
		// Gelen URL verisindeki HTML karakterleri süzüyoruz
		$tag = htmlentities(strip_tags($tag));

		// Sayfanın başlığını etikete göre belirliyoruz
		$data['title'] = "$tag etiketli gönderiler";

		$postModel = $this->model('post');
		
		// Gönderileri etikete göre getiriyoruz
		$posts = $postModel->getAllByTags($tag);
		$data['posts'] = $posts;

		return $this->render('index', $data);
	}
}
