<?php

namespace App\Controllers\Client;

use App\Controllers\Client;

class Services extends Client
{
	public function index()
	{
		return $this->view('client.pages.services.list');
	}

	public function detail()
	{
		return $this->view('client.pages.services.detail');
	}
}
