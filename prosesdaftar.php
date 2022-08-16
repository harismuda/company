<?php
 session_start();
include ("koneksi.php");

$kode = $_GET['id'];
$nama = $_GET['name'];
$username = $_GET['username'];
$password = $_GET['password'];

$hitung = "select count(id) from login where id = '".$kode."'";
$q_hitung = mysqli_query($conn,$hitung);
$name = 0;
while ($arr = mysqli_fetch_row($q_hitung)) {

	$name = $arr[0];

}
if ($name > 0)
{
	echo "<script>alert('Akun Dengan ID ".$kode." Sudah Ada!')</script>";
	echo "<script>window.location.href = \"http://localhost/company/daftar.php\" </script>";
}
else{
	$masuk= "INSERT INTO login VALUES ('".$kode."','".$username ."','".$password ."','".$nama."')";
	$q_buat = mysqli_query($conn,$masuk);

	echo "<script>alert('Berhasil Daftar, Silahkan Login!')</script>";
	echo "<script>window.location.href = \"http://localhost/company/login.php\" </script>";
}
 ?>
 