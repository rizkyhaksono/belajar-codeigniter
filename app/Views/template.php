<html>

<head>
    <title>
        <?php echo $judul_halaman; ?>
    </title>
    <link rel="stylesheet" href="<?php echo base_url('public/assets/style.css'); ?>" type="text/css">
</head>

<body>

    <header>
        <h1>Kemahasiswaan Poltek</h1>
        <nav>
            <a href="index.php">Home</a>
        </nav>
    </header>

    <?php $this->renderSection('content') ?>

    <footer class="article-meta">
        Copyright - All Right Reserved
    </footer>

</body>

</html>