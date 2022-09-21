<html>
    <head>
        <title>
            Tambah Mahasiswa
        </title>
        <link rel="stylesheet" href="assets/style.css" type="text/css">
    </head>
    <body>

        <header>
            <h1>Kemahasiswaan Poltek</h1>
            <nav>
                <a href="index.php">Home</a>
            </nav>
        </header>

        <article>
            <p>Edit Mahasiswa</p>
            <br/><br/>

            <form action="#" method="post" name="form1" enctype="multipart/form-data">
                <table width="25%" border="0">
                    <tr> 
                        <td>NIM</td>
                        <td><input type="text" name="nim" value="42525001"></td>
                    </tr>
                    <tr> 
                        <td>Nama Mahasiswa</td>
                        <td><input type="text" name="nama" value="Elon Musk"></td>
                    </tr>
                    <tr> 
                        <td>Alamat</td>
                        <td><textarea name="alamat" cols="50" rows="5">Bumi Tamalanrea Permai</textarea></td>
                    </tr>
                    <tr>
                        <td>Upload Foto</td>
                        <td>
                            <div class="image-wrapper">
                                <img src="foto/elon.jpg">
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

        <footer class="article-meta">
            Copyright - All Right Reserved
        </footer>

    </body>
</html>