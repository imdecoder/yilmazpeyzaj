<?php

namespace App\Controllers\Client;

use App\Controllers\Client;

class Blog extends Client
{
	public function index()
	{
		return $this->view('client.pages.blog.list', $this->data);
	}
}
