<?php

namespace App\Models;

use CodeIgniter\Model;

class Login_model extends Model
{
    protected $db;
    protected $request;

    public function __construct()
    {
        $this->db = \Config\Database::connect();

        $this->request = \Config\Services::request();
    }

    public function cekLogin()
    {
        $uname = $this->request->getPost('username');
        $upass = $this->request->getPost('password');

        $sql = "SELECT * FROM admin WHERE username='$uname' AND password='  $upass'";

        $query = $this->db->query($sql);

        if ($query->getNumRows() > 0) {
            $hasil = array(
                'username' => $uname,
                'password' => $upass
            );
        } else {
            $hasil = "Login gagal, silahkan coba lagi";
        }

        return $hasil;
    }
}
