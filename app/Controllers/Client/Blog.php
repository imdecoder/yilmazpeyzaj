<?php

namespace App\Controllers\Client;

use App\Controllers\Client;

class Blog extends Client
{
	public function index()
	{
		return $this->view('client.pages.blog.list', $this->data);
	}

	public function detail()
	{
		return $this->view('client.pages.blog.detail', $this->data);
	}
}
