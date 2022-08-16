<?php 

session_start(); 

include "koneksi.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $user = validate($_POST['username']);

    $pass = validate($_POST['password']);

    if (empty($user)) {

        header("Location: index.php?error=Username wajib diisi");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password wajib diisi");

        exit();

    }else{

        $sql = "SELECT * FROM login WHERE username='$user' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $user && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                $_SESSION['password'] = $row['password'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: crud.php");

                exit();

            }else{

                header("Location: index.php?error=Username atau kata sandi salah");

                exit();

            }

        }else{

            header("Location: index.php?error=Username atau kata sandi salah");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}