<?php $this->extend('template') ?>

<?php $this->section('content') ?>

<article>
    <p><?php echo $judul_halaman; ?></p>
    <br />

    <h1><?php echo $mhs[0]['nama_mhs'] ?></h1>

    <div class="image-wrapper-detail">
        <img src="<?php echo base_url('public/foto/' . $mhs[0]['foto']) ?>">
    </div>

    <div>
        <p>
            NIM: <?php echo $mhs[0]['nim'] ?>
        </p>
        <p>
            Nama: <?php echo $mhs[0]['nama_mhs'] ?>
        </p>
        <p>
            Alamat: <?php echo $mhs[0]['alamat'] ?>
        </p>
    </div>

</article>

<?php $this->endSection(); ?>