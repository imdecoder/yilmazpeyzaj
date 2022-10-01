<?php

namespace App\Controllers\Client;

use App\Controllers\Client;

class Home extends Client
{
	public function index()
	{
		return $this->view('client.pages.home');
	}
}
