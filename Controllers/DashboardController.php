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

    public function meals()
    {
        $data = array();

        $this->loadTemplate('dashboard/meals', $data);
    }

    public function foods()
    {
        $data = array();

        $this->loadTemplate('dashboard/foods', $data);
    }

    public function config()
    {
        $data = array();

        $this->loadTemplate('dashboard/config', $data);
    }
}