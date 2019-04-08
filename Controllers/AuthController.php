<?php
namespace Controllers;

use \Core\Controller;
use \Models\Usuarios;

class AuthController extends Controller 
{
	public function login()
	{
		$data = array();

		$this->loadView('auth/login', $data);
	}

}