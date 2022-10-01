<?php

namespace App\Controllers\Admin\Auth;

use Core\Controller;

class ForgotPassword extends Controller
{
	public function index()
	{
		return $this->view('admin.pages.auth.forgot-password');
	}
}
