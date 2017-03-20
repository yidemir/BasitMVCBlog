<?php

class adminController extends controller
{
	public function __construct()
	{
		// Oturumu başlatalım
		session_start();
	}

	/**
	 * Yönetim ana sayfası
	 * @return void
	 */
	public function indexAction()
	{
		// Admin giriş yapmış mı kontrol ediyoruz
		$this->checkLogin();

		// View'da kullanabilmek için $title değişkeni oluşturuyoruz
		$data['title'] = 'Blog Yönetimi';

		// views/admin/index.php sayfasını yorumluyoruz
		return $this->render('admin/index', $data);
	}

	/**
	 * Gönderi listesi
	 * @return void
	 */
	public function postsAction()
	{
		// Admin giriş yapmış mı kontrol ediyoruz
		$this->checkLogin();

		// models/post.php modelini değişkene aktarıyoruz
		$postModel = $this->model('post');

		// view katmanına veri göndermek için $posts ve $title
		// değişkenlerine verileri atıyoruz.
		// models/post.php sınıfında bulunan getAll() metodu ile
		// bütün gönderileri bir değişkene atıyoruz.
		$data['posts'] = $postModel->getAll();
		$data['title'] = 'Blog Gönderileri';

		// views/admin/posts.php görünümünü yorumluyoruz
		return $this->render('admin/posts', $data);
	}

	/**
	 * Yeni gönderi
	 */
	public function newAction()
	{
		// Admin giriş yapmış mı kontrol ediyoruz
		$this->checkLogin();

		$data['title'] = 'Yeni Gönderi';

		// Eğer GET isteği ile sayfaya geldiyse yeni gönderidir
		if ($_SERVER['REQUEST_METHOD'] === 'GET') {

			// views/admin/login.php görünümünü yorumluyoruz
			return $this->render('admin/post', $data);

		// Eğer POST isteğiyle geldiyse formu kullanmıştır:
		} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

			$postModel = $this->model('post');
			$postModel->create(
				$_POST['title'], 
				$_POST['body'], 
				$_POST['tags'], 
				date('Y-m-d H:i:s')
			);

			$data['message'] = 'Gönderi başarıyla oluşturulmuştur';

			return $this->render('admin/post', $data);

		}
	}

	/**
	 * Gönderi silme işlemi
	 * @param integer $id
	 * @return void
	 */
	public function deleteAction($id)
	{
		// Admin giriş yapmış mı kontrol ediyoruz
		$this->checkLogin();

		// Aldığımız ID değeri kontrol ediyoruz SQL Injection'a karşı
		// PDO önlemini almış ama sağlama almakta yarar var
		if (!is_numeric($id)) exit('ID sadece numerik olabilir');

		// models/post.php sınıfında bulunan delete() metodu
		// ile gönderiyi veritabanından siliyoruz
		$postModel = $this->model('post');
		$postModel->delete($id);

		$data['title'] = 'Gönderi İşlemleri';
		$data['posts'] = $postModel->getAll();
		$data['message'] = 'Gönderi başarıyla silindi';

		// views/admin/posts.php görünümünü yorumluyoruz
		return $this->render('admin/posts', $data);
	}

	/**
	 * Yönetici giriş yapmış mı bunun kontrolünü sağlar
	 * @return void
	 */
	private function checkLogin()
	{
		if (!isset($_SESSION['loggedIn'])) {
			return $this->redirect($this->url('admin/login'));
		}
	}

	public function loginAction()
	{
		// Eğer GET isteği ile sayfaya geldiyse kullanıcı
		if ($_SERVER['REQUEST_METHOD'] === 'GET') {

			$data['title'] = 'Giriş';

			// views/admin/login.php görünümünü yorumluyoruz
			return $this->render('admin/login', $data);

		// Eğer POST isteğiyle yani giriş formunun yönlendirmesi sonucu
		// kullanıcı sayfaya geldiyse:
		} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

			// Kullanıcı adı ve şifre doğruysa
			if ($_POST['username'] === 'admin' && $_POST['password'] === 'admin') {

				$_SESSION['loggedIn'] = true;

				// Yönlendir
				return $this->redirect($this->url('admin/index'));

			// Kullanıcı adı ve şifre doğru değilse
			} else {
				$data['title'] = 'Giriş';
				$data['message'] = 'Kullanıcı adı ya da şifre hatalı';
				return $this->render('admin/login', $data);
			}

		}
	}

	public function logoutAction()
	{
		// Oturumu kaldır/sil/yok et!
		session_destroy();
		return $this->redirect($this->url('default/index'));
	}
}
