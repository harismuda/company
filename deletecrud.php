<?php
session_start();
include ("koneksi.php");

$judul = $_GET['judul'];
$hapus = "DELETE FROM companyprofile WHERE judul = '".$judul."'";
$q_buat = mysqli_query($conn,$hapus);

echo "<script>alert('Hapus Data  ".$judul." Berhasil')</script>";
echo "<script>window.location.href =\"http://localhost/company/crud.php\"</script>";
?>