<?php

namespace App\Controllers;

use Core\Controller;
use PDO;

class Client extends Controller
{
	public $data;

	public function __construct()
	{
		parent::__construct();
		
		$this->services();
		$this->credentials();
	}

	public function services()
	{
		$services = $this->db->query("
			SELECT title, slug
			FROM services
			WHERE status_id = 1 AND deleted_at IS NULL
			ORDER BY priority ASC, title ASC
		", PDO::FETCH_OBJ);

		if ($services->rowCount())
		{
			$this->data['services']['header'] = $services;
		}
		else
		{
			$this->data['services']['header'] = null;
		}
	}

	public function credentials()
	{
		$credentials = $this->db->query("
			SELECT title, slug
			FROM credentials
			WHERE status_id = 1 AND deleted_at IS NULL
			ORDER BY priority ASC, title ASC
		", PDO::FETCH_OBJ);

		if ($credentials->rowCount())
		{
			$this->data['credentials']['header'] = $credentials;
		}
		else
		{
			$this->data['credentials']['header'] = null;
		}
	}
}
