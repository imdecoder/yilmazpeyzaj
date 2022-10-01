<?php

namespace App\Controllers\Admin\Auth;

use Core\Controller;
use Symfony\Component\HttpFoundation\Request;
use PDO;

class Login extends Controller
{
	public function index(Request $request)
	{
		$data = [];

		if ($request->getMethod() == 'POST')
		{
			$data['username'] = $request->request->get('username');

			$this->validator->rule('required', [
				'username',
				'password'
			]);

			if ($this->validator->validate())
			{
				$data = $this->validator->data();

				$username = $data['username'];
				$password = md5($data['password']);

				$sql = "SELECT id
				FROM users
				WHERE username = '{$username}' && password = '{$password}'";

				$query = $this->db->query($sql)->fetch(PDO::FETCH_OBJ);

				if ($query)
				{
					session()->segment->set('user_login', true);
					session()->segment->set('user_id', $query->id);

					header('Location: ' . site_url('admin/dashboard'));
					exit;
				}
				else
				{
					$data['error'] = [
						'class' => 'danger',
						'text' => 'Kullanıcı adı veya şifre hatalı.'
					];
				}
			}
			else
			{
				$data['error'] = [
					'class' => 'warning',
					'text' => 'Lütfen boş alan bırakmayın.'
				];
			}
		}

		return $this->view('admin.pages.auth.login', $data);
	}
}
