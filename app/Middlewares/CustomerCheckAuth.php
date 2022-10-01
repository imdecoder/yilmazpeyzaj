<?php

namespace App\Middlewares;

class CustomerCheckAuth
{
	public function handle()
	{
		$customerLogin = session()->segment->get('customer_login');

		if (!$customerLogin && !array_intersect(segments(), ['giris-yap', 'kayit-ol', 'cikis-yap', 'sifremi-unuttum']))
		{
			header('Location: ' . site_url('magaza/hesabim/giris-yap'));
			exit;
		}

		if ($customerLogin && array_intersect(segments(), ['giris-yap', 'kayit-ol', 'sifremi-unuttum']))
		{
			header('Location: ' . site_url('magaza/hesabim'));
			exit;
		}

		return true;
	}
}
