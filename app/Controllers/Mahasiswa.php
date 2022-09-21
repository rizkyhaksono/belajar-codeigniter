<?php

namespace App\Controllers;

use App\Models\Mahasiswa_model;

class Mahasiswa extends BaseController
{
    // multi fungsi variable
    protected $Mahasiswa_model;

    public function __construct()
    {
        $this->Mahasiswa_model = new Mahasiswa_model();
    }

    public function index()
    {
        // mengambil data dari model
        $data['mhs'] = $this->Mahasiswa_model->selectdatamhs();
        $data['judul_halaman'] = "Beranda Sistem";

        return view('pages/beranda', $data);
    }
}
