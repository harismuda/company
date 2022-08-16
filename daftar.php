<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Daftar</title>
</head>

<body>
    <div class="login">
        <h1>Daftar</h1>
        <form method="get" action="prosesdaftar.php">
            <input type="text" name="id" placeholder="ID" required="required" />
            <input type="text" name="username" placeholder="Username" required="required" />
            <input type="password" name="password" placeholder="Password" required="required" />
            <input type="text" name="name" placeholder="Name" required="required" />
            <button type="submit" class="btn btn-primary btn-block btn-large">Daftar</button>
        </form>
        <center>
        <p>Jika Sudah Punya Akun Silahkan <a href="index.php">Login</a></p>
        </center>
    </div>
</body>

</html>