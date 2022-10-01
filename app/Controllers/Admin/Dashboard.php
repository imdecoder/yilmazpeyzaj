<?php

namespace App\Controllers\Admin;

use Core\Controller;

class Dashboard extends Controller
{
	public function index()
	{
		return $this->view('admin.pages.dashboard');
	}
}
