<?php 
session_Start();
include ("koneksi.php");
if($_SESSION)["username"] =="";

$user=mysqli_query($conn,"SELECT * FROM companyprofile
    WHERE judul = '".$_GET['judul']."' ");
    $u = mysqli_fetch_object($user);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter&family=Roboto+Mono&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <title>Flashsoft Indonesia</title>
</head>
<body>
    <div class="hero">
        <div class="overlay">
            <div class="container">
                <div class="header">
                    <div class="logo">
                        <h1><a href=""><?php echo $u->judul ?></a></h1>
                    </div>
                </div>
                <div class="hero-center">
                    <h2><?php echo $u->nama ?></h2>
                    <p><?php echo $u->bidang ?></p>
                    <a href="" class="btn">Buat Sekarang</a>
                </div>
            </div>
        </div>
        
    </div>
    <div class="about">
        <div class="container">
            <div class="wrapper">
                <div class="about-image">
                    <div class="image-one">
                        <img class="img-responsive" src="https://images.unsplash.com/photo-1521185496955-15097b20c5fe?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" alt="">
                    </div>

                </div>
                <div class="about-desc">
                    <h2>KATA PENGANTAR</h2>
                    <p><?php echo $u->kata_pengantar ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="services">
        <div class="container">
            <div class="wrapper">
                <div class="service-title">
                    <h2>VISI DAN MISI</h2>
                </div>
            </div>
            <div class="wrapper">
                <div class="service-item">
                    <h4>Visi Dan Misi</h4>
                    <ul>
                        <li>Membahagiakan Kedua Orang Tua ku.</li>
                        <li>Meraih apa yang aku cita-citakan yaitu menjadi seorang Programmer Handal
                            Khususnya Web Programmer and Menjadi seorang yang berhasil and sukses
                            di DUNIA and AKHIRAT.
                        </li>
                        <li>Menjadi Seorang Miliader Kayak Bill Gates.</li>
                        <li>Mengemban Misi Mencerdaskan Kehidupan Bangsa and Menjadi Mativator handal
                            yang nyata bagi Umat Manusia di Dunia Kayak Bpk.Tanadisantoso.</li>
                        <li>Dan Yang Paliiiiiiiiii......ing Penting Yaitu Mencari Seorang Pendamping Hidup yang
                            mau mengarahkan dan membimbing aku untuk menuju jalan Kebenaran yaitu
                            Beribadah kepada Tuhan YME. Amien.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="profile">
        <div class="about">
        <div class="container">
            <div class="wrapper">
                <div class="about-image">
                    <div class="image-profile">
                        <img class="img-responsive" src="https://images.unsplash.com/photo-1537432376769-00f5c2f4c8d2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=725&q=80" alt="">
                    </div>
                </div>
                <div class="about-desc">
                    <h2>Profile</h2>
                    <p><?php echo $u->profile ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="layanan">
    <div class="about">
        <div class="container">
            <div class="wrapper">
                <div class="about-desc">
                    <h2>Layanan</h2>
                    <p><?php echo $u->layanan ?></p>
                </div>
                <div class="about-image">
                    <div class="image-layanan">
                        <img class="img-responsive" src="https://images.unsplash.com/photo-1564865878688-9a244444042a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="copyright">
                <p>2022 &copy; HIM. All Right Reserved</p>
            </div>
</body>
</html>