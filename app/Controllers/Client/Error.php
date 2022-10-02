<?php

namespace App\Controllers\Client;

use App\Controllers\Client;

class Error extends Client
{
	public function index()
	{
		return $this->view('client.pages.error', $this->data);
	}
}
