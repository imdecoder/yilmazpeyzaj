<?php

namespace App\Controllers\Admin\Auth;

use Core\Controller;

class Logout extends Controller
{
	public function index()
	{
		session()->clear();

		header('Location: ' . site_url('admin/login'));
		exit;
	}
}
