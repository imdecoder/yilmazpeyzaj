<?php

namespace App\Controllers\Client;

use App\Controllers\Client;

class Offer extends Client
{
	public function index()
	{
		return $this->view('client.pages.offer', $this->data);
	}
}
