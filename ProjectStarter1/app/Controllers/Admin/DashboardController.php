<?php

require_once('app/Controllers/Admin/BackendController.php');

class Dashboard extends BackendController
{
    public function index()
    {
        return $this->view('dashboard/index.php');
    }
}