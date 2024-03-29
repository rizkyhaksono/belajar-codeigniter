<?php

namespace App\Models;

use CodeIgniter\Model;

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
        $sql = "SELECT * FROM mahasiswa";
        $query = $this->db->query($sql);
        $data = $query->getResultArray();
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

    public function detaildatamhs($id_mhs)
    {
        $sql = "SELECT * FROM mahasiswa WHERE id_mhs = '$id_mhs'";
        $query = $this->db->query($sql);
        $data = $query->getResultArray();
        return $data;
    }

    public function editdatamhs()
    {
        // data sementara
        $id_mhs = $this->request->getPost('id_mhs');
        $fotoLama = $this->request->getPost('fotoLama');

        $nim = $this->request->getPost('nim');
        $nama = $this->request->getPost('nama');
        $alamat = $this->request->getPost('alamat');

        if ($this->request->getFile('fotomhs')->getName()) {
            unlink('public/foto/' . $fotoLama);

            $fileFoto = $this->request->getFile('fotomhs');
            $namaFoto = $fileFoto->getName();

            $fileFoto->move('public/foto', $namaFoto);
            $sql = "UPDATE mahasiswa SET nim = '$nim',
                                    nama_mhs = '$nama',
                                    alamat = '$alamat',
                                    foto = '$namaFoto'
                                WHERE id_mhs = '$id_mhs'";
        } else {
            $sql = "UPDATE mahasiswa SET nim = '$nim',
                                    nama_mhs = '$nama',
                                    alamat = '$alamat'
                                WHERE id_mhs = '$id_mhs'";
        }

        $this->db->query($sql);
        return;
    }

    public function deletedatamhs($id_mhs, $fotoLama)
    {
        unlink('public/foto/' . $fotoLama);

        $sql = "DELETE FROM mahasiswa WHERE id_mhs = '$id_mhs' ";

        $this->db->query($sql);

        return;
    }
}
