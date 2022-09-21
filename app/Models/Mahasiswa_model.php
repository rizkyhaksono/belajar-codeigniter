<?php

namespace App\Models;

use CodeIgniter\Model;

class Mahasiswa_model extends Model
{

    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
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
}
