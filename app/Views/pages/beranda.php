<?php $this->extend('template') ?>

<?php $this->section('content') ?>
<article>
    <a href="<?php echo base_url('mahasiswa/add'); ?>">Tambah Mahasiswa</a><br />
    <p>Dashboard</p>
    <p>Hallo, <?php echo $login_status['username'] ?></p>

    <table width='100%' border=0>

        <thead bgcolor='#CCCCCC'>
            <tr>
                <td>Id</td>
                <td>NIM</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Foto</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($mhs as $row) {
                echo '
                <tr>
                    <td>' . $row['id_mhs'] . '</td>
                    <td>' . $row['nim'] . '</td>
                    <td>' . $row['nama_mhs'] . '</td>
                    <td>' . $row['alamat'] . '</td>
                    <td>
                        <div class="image-wrapper">
                            <img src=" ' . base_url('public/foto/' . $row['foto']) . ' ">
                        </div>
                    </td>
                    <td>
                        <a href=" ' . base_url('mahasiswa/detail/' . $row['id_mhs']) . ' ">Detail</a> |
                        <a href=" ' . base_url('mahasiswa/edit/' . $row['id_mhs']) . ' ">Edit</a> |
                        <a href=" ' . base_url('mahasiswa/delete/' . $row['id_mhs']) . '/' . $row['foto'] . ' " onClick=" return confirm(\'Apakah Anda Yakin Ingin Menghapus Berita Ini?\') ">Delete</a>
                    </td>
                </tr>
                ';
            }

            ?>

        </tbody>
    </table>

</article>

<?php $this->endSection() ?>