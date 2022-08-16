<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="login">
        <h1>Login</h1>
        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
        <form method="post" action="proseslogin.php">
            <input type="text" name="username" placeholder="Enter Username" required="required" />
            <input type="password" name="password" placeholder="Enter Password" required="required" />
            <button type="submit" class="btn btn-primary btn-block btn-large">Login</button>
        </form>
        <center>
        <p>Jika Belum Punya Akun Silahkan <a href="daftar.php">Daftar</a></p>
        </center>
    </div>
</body>
</html>