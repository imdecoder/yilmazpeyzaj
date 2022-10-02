<?php

namespace App\Controllers;

use Core\Controller;
use stdClass;

class Client extends Controller
{
	public $data;

	public function __construct()
	{
		parent::__construct();

		$services = $this->db->query("
			SELECT title, slug
			FROM services
			WHERE status_id = 1 AND deleted_at IS NULL
			ORDER BY priority ASC, title ASC
		");

		if ($services->rowCount())
		{
			$this->data['services']['header'] = $services;
		}
		else
		{
			$this->data['services']['header'] = null;
		}
	}
}
