<?php
namespace Controllers;

use \Core\Controller;
use \Models\Usuarios;

class HomeController extends Controller 
{
	public function index()
	{
		$data = array();

		$this->loadView('home', $data);
	}

}