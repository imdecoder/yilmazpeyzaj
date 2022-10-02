<?php

namespace App\Controllers\Client;

use App\Controllers\Client;

class Faq extends Client
{
	public function index()
	{
		return $this->view('client.pages.faq', $this->data);
	}
}
