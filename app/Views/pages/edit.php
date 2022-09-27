<?php $this->extend('template'); ?>

<?php $this->section('content'); ?>

<article>
    <p><?php echo $judul_halaman; ?></p>
    <br /><br />

    <form action="#" method="post" name="form1" enctype="multipart/form-data">
        <table width="25%" border="0">
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" value="<?php echo $mhs[0]['nim'] ?>"></td>
            </tr>
            <tr>
                <td>Nama Mahasiswa</td>
                <td><input type="text" name="nama" value="<?php echo $mhs[0]['nama_mhs'] ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" cols="50" rows="5"><?php echo $mhs[0]['alamat'] ?></textarea></td>
            </tr>
            <tr>
                <td>Upload Foto</td>
                <td>
                    <div class="image-wrapper">
                        <img src="<?php echo base_url('public/foto/' . $mhs[0]['foto']) ?>">
                    </div>
                    <input type="file" name="fotomhs" id="fileToUpload">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Add"></td>
            </tr>
        </table>
    </form>
</article>

<?php $this->endSection(); ?>