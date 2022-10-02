<?php

namespace App\Controllers;

use App\Models\Login_model;

use CodeIgniter\Controller;

class Login extends BaseController
{

    protected $login_model;

    public function __construct()
    {
        // $this->login_model = new login_model();
    }

    public function index()
    {
        return view('login');
    }
}
