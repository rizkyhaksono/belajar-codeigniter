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

        session();
        $data['pesan_validasi'] = \Config\Services::validation();
        $data['judul_halaman'] = "Tambah Data";

        return view('pages/add', $data);
    }

    public function add_aksi()
    {
        // validasi gambar dari user
        if (!$this->validate([
            'fotomhs' => 'uploaded[fotomhs]|ext_in[fotomhs, png, jpg]|max_size[fotomhs, 1024]'
        ])) {
            return redirect()->to('/mahasiswa/add')->withInput();
        }

        $data['mhs'] = $this->Mahasiswa_model->insertdatamhs();

        return redirect()->to('/mahasiswa');
    }

    public function detail($id_mhs)
    {
        $data['mhs'] = $this->Mahasiswa_model->detaildatamhs($id_mhs);

        $data['judul_halaman'] = "Detail Data";

        return view('pages/detail', $data);
    }

    public function edit($id_mhs)
    {
        session();
        $data['pesan_validasi'] = \Config\Services::validation();

        $data['mhs'] = $this->Mahasiswa_model->detaildatamhs($id_mhs);

        $data['judul_halaman'] = "Edit Data";

        return view('pages/edit', $data);
    }

    public function edit_aksi($id_mhs)
    {
        if (!$this->validate([
            'fotomhs' => 'ext_in[fotomhs, png, jpg]|max_size[fotomhs, 1024]'
        ])) {
            return redirect()->to('../mahasiswa/edit/' . $id_mhs)->withInput();
        }

        $data['mhs'] = $this->Mahasiswa_model->editdatamhs();

        return redirect()->to('/mahasiswa');
    }

    public function delete($id_mhs, $fotoLama)
    {
        $this->Mahasiswa_model->deletedatamhs($id_mhs, $fotoLama);

        return redirect()->to('/mahasiswa');
    }
}
