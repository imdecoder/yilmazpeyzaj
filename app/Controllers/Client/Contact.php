<?php

namespace App\Controllers\Client;

use App\Controllers\Client;

class Contact extends Client
{
	public function index()
	{
		return $this->view('client.pages.contact');
	}
}
