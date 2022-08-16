<?php 
session_Start();
include ("koneksi.php");
if($_SESSION)["username"] =="";

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
    <title>Company Profile</title>
</head>
<body>
    <div class="hero">
        <div class="overlay">
            <div class="container">
                <div class="header">
                    <div class="logo">
                        <h1><a href="">CP</a></h1>
                    </div>
                    <div class="menu">
                        <a href="index.php" >Home</a>
                        <a href="logout.php" style="color: #1FF900"> Logout Dari <?php echo $_SESSION["username"]; ?></a>
                    </div>
                </div>
                <div class="hero-center">
                    <h2>Flashsoft Indonesia</h2>
                    <p>Fs bergerak di bidang IT, terutama Software House dan Programming School.</p>
                    <a href="" class="btn">Input Data</a>
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
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum neque fugiat quis, modi doloremque ex similique nemo sequi earum magnam.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="services">
        <div class="container">
            <div class="wrapper">
                <div class="service-title">
                    <h2>VISI MISI</h2>
                </div>
            </div>
            <div class="wrapper">
                <div class="service-item">
                    <h4>Visi</h4>
                    <p>Menjadikan Blog atau Website kami sebagai Sarana Informasi yang berguna bagi semua Orang dan Kalangan</p>
                    <br>
                    <h4>Misi</h4>
                    <p>Menjadikan Blog atau Website kami sebagai Sarana Informasi yang berguna bagi semua Orang dan Kalangan</p>
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
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum neque fugiat quis, modi doloremque ex similique nemo sequi earum magnam.</p>
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
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum neque fugiat quis, modi doloremque ex similique nemo sequi earum magnam.</p>
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