<?php

$nama_db = "cv";
$server = "localhost";
$username = "root";
$password ="";

$conn = mysqli_connect($server,$username,$password,$nama_db);

if (mysqli_connect_errno()){
	echo "koneksi gagal".mysqli_connect_errno();
}
?>   