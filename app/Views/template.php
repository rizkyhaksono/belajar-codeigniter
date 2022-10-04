<html>

<head>
    <title>
        <?php echo $judul_halaman; ?>
    </title>
    <link rel="stylesheet" href="<?php echo base_url('public/assets/style.css'); ?>" type="text/css">
</head>

<body>

    <header>
        <h1>Kemahasiswaan Infotech</h1>
        <nav>
            <a href="<?php echo base_url('/'); ?>">Home</a>
            <a href="<?php echo base_url('/mahasiswa/logout') ?>">Logout</a>
        </nav>
    </header>

    <?php $this->renderSection('content') ?>

    <footer class="article-meta">
        Copyright - All Right Reserved
    </footer>

</body>

</html>