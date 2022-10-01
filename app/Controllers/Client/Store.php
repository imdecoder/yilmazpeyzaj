<?php

namespace App\Controllers\Client;

use App\Controllers\Client;

class Store extends Client
{
	public function index()
	{
		return $this->view('client.pages.store.list');
	}

	public function product()
	{
		return $this->view('client.pages.store.product');
	}

	public function category()
	{
		return $this->view('client.pages.store.category');
	}

	public function tag()
	{
		return $this->view('client.pages.store.tag');
	}

	public function cart()
	{
		return $this->view('client.pages.store.cart');
	}

	public function account_login()
	{
		return 'account/login';
	}

	public function account_register()
	{
		return 'account/register';
	}

	public function account_forgot()
	{
		return 'account/forgot';
	}
}
