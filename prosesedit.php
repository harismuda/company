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

$ubah = "
       UPDATE companyprofile
       SET nama='".$nama."',
       bidang = '".$bd."',
       kata_pengantar = '".$kp."',
       visi_dan_misi = '".$vdm."',
       profile = '".$profile."',
       layanan = '".$layanan."'
       WHERE nama = '".$nama."'";



$q_upd = mysqli_query($conn,$ubah);


	echo "<script>alert('Ubah Data ".$judul." Berhasil')</script>";
	echo "<script>window.location.href = \"http://localhost/company/crud.php\" </script>";
?>