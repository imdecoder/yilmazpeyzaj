<?php

namespace App\Controllers\Client;

use App\Controllers\Client;

class References extends Client
{
	public function index()
	{
		return $this->view('client.pages.references.list', $this->data);
	}

	public function detail()
	{
		return $this->view('client.pages.references.detail', $this->data);
	}
}
