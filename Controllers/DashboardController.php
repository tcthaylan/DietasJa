<?php
namespace Controllers;

use \Core\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $data = array();

        $this->loadTemplate('dashboard/home', $data);
    }
}