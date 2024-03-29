<?php

namespace App\Controllers;

use App\Models\Login_model;

use CodeIgniter\Controller;

class Login extends BaseController
{

    protected $Login_model;

    public function __construct()
    {
        $this->Login_model = new Login_model();
    }

    public function index()
    {
        return view('login');
    }

    public function login_aksi()
    {
        $login = $this->Login_model->cekLogin();

        if ($login != 'Login gagal, silahkan coba lagi') {
            $this->session->set('data_login', $login);

            return redirect()->to('/');
        } else {
            echo $login;
        }
    }

    public function logout()
    {
        $this->session->destroy();

        return redirect()->to('/mahasiswa/login');
    }
}
