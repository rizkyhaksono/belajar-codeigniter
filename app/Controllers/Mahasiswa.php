<?php

namespace App\Controllers;

use App\Models\Mahasiswa_model;
use CodeIgniter\Controller;

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

    public function add()
    {
        $data['mhs'] = $this->Mahasiswa_model->selectdatamhs();
        $data['judul_halaman'] = "Tambah Data";

        return view('pages/add', $data);
    }

    public function add_aksi()
    {

        $data['mhs'] = $this->Mahasiswa_model->insertdatamhs();

        return redirect()->to('/mahasiswa');
    }
}
