<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem</title>
</head>

<body>

    <h1>Sistem Login</h1>

    <form action="<?php echo base_url('login/login_aksi'); ?>" method="post" enctype="multipart/form-data">
        <label for="">Username</label><br />
        <input type="text" name="username"><br /><br />

        <label for="">Password</label><br />
        <input type="password" name="password"><br /><br />

        <input type="submit" name="submit" value="Login"><br /><br />
    </form>

</body>

</html>