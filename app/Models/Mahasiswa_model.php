<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\HTTP\RequestInterface;

class Mahasiswa_model extends Model
{

    protected $db;
    protected $request;

    public function __construct()
    {
        $this->db = \Config\Database::connect();

        $this->request = \Config\Services::request();
    }

    public function selectdatamhs()
    {
        // koneksi ke database
        $sql = "SELECT * FROM mahasiswa";

        // eksekusi query
        $query = $this->db->query($sql);

        // ambil data dalam bentuk array
        $data = $query->getResultArray();

        // kembalikan data
        return $data;
    }

    public function insertdatamhs()
    {
        $nim = $this->request->getPost('nim');
        $nama = $this->request->getPost('nama');
        $alamat = $this->request->getPost('alamat');

        $fileFoto = $this->request->getFile('fotomhs');
        $namaFoto = $fileFoto->getName();

        $fileFoto->move('public/foto', $namaFoto);

        $sql = "INSERT INTO mahasiswa(nim, nama_mhs, alamat, foto) VALUES ('$nim', '$nama', '$alamat', '$namaFoto')";

        $this->db->query($sql);

        return;
    }

    public function detaildatamhs()
    {
    }
}
