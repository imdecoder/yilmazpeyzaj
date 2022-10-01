<?php

namespace App\Controllers\Client;

use App\Controllers\Client;

class About extends Client
{
	public function index()
	{
		return $this->view('client.pages.about');
	}
}
