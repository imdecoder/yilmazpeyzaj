<?php

namespace App\Controllers\Client;

use App\Controllers\Client;

class Store extends Client
{
	public function index()
	{
		return $this->view('client.pages.store.list', $this->data);
	}

	public function product()
	{
		return $this->view('client.pages.store.product', $this->data);
	}

	public function category()
	{
		return $this->view('client.pages.store.category', $this->data);
	}

	public function tag()
	{
		return $this->view('client.pages.store.tag', $this->data);
	}

	public function cart()
	{
		return $this->view('client.pages.store.cart', $this->data);
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
