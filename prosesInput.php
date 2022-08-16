<?php
 session_start();
include ("koneksi.php");

$judul = $_GET['judul'];
$nama = $_GET['nama'];
$bd = $_GET['bidang'];
$kp = $_GET['kp'];
$vdm = $_GET['vdm'];
$profile = $_GET['profile'];
$layanan = $_GET['layanan'];

$hitung = "select count(nama) from companyprofile where judul = '".$judul."'";
$q_hitung = mysqli_query($conn,$hitung);
$bidang = 0;
while ($arr = mysqli_fetch_row($q_hitung)) {

	$bidang = $arr[0];

}
if ($bidang > 0)
{
	echo "<script>alert('Data dengan ID ".$judul." sudah ada di table')</script>";
	echo "<script>window.location.href = \"http://localhost/company/crud.php\" </script>";
}
else{
	$masuk= "INSERT INTO companyprofile VALUES ('".$judul."','".$nama."','".$bd."','".$kp."','".$vdm."','".$profile."','".$layanan."')";
	$q_buat = mysqli_query($conn,$masuk);

	echo "<script>alert('input data berhasil')</script>";
	echo "<script>window.location.href = \"http://localhost/company/crud.php\" </script>";
}
 ?>
 