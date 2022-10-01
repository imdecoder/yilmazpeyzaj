<?php

namespace App\Middlewares;

class UserCheckAuth
{
	public function handle()
	{
		$userLogin = session()->segment->get('user_login');

		if (!$userLogin && !array_intersect(segments(), ['login', 'logout', 'forgot-password']))
		{
			header('Location: ' . site_url('admin/login'));
			exit;
		}

		if ($userLogin && array_intersect(segments(), ['login', 'forgot-password']))
		{
			header('Location: ' . site_url('admin/dashboard'));
			exit;
		}

		return true;
	}
}
