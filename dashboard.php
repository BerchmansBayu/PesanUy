<?php 
include 'koneksi.php';
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['username']==""){
		header("location:login.php");
	}
 
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--=== REMIXICON ===-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
<!--=== CSS ===-->
<link rel="stylesheet" href="./css/dashboard.css">
    <title>Dashboard <?= $_SESSION['username'];?></title>
    </head>
    <body> 

    <div class="sidebar">
    <div class="logo"></div>
    <ul class="menu">
        <li class="active">
            <a href="dashboard.php"> 
                <i class="ri-dashboard-2-line"></i>
                <span>Menu</span>
            </a>  
        </li>
    <li>
        <a href="bus.php">
            <i class="ri-bus-fill"></i>
            <span>Bus</span>
        </a>  
    </li>
    <li>
        <a href="terminal.php">
            <i class="ri-building-line"></i>
            <span>Halte</span>
        </a>  
    </li>
    <li>
        <a href="rute.php">
            <i class="ri-road-map-line"></i>
            <span> Rute</span>
        </a>  
    </li>
    <li>
        <a href="pengguna.php">
            <i class="ri-group-line"></i>
            <span>User</span>
        </a>  
    </li>
    <li>
        <a href="pesanan.php">
            <i class="ri-shopping-cart-line"></i>
            <span>Pesan</span>
        </a>  
    </li>
    <li class="logout">
        <a href="logout.php">
            <i class="ri-logout-circle-line"></i>
            <span>Exit</span>
        </a>  
    </li>
    </ul>
   </div>

    <!--=== MAIN ===-->
  <main class="main">
    <!--=== DASHBOARD ===-->
        <section class="Dashboard section" id="Dashboard">
   <div class="main_content">
    <div class="header_wreaper">
        <div class="header_title">
        <span>PesanUy</span>
        <h2>Dashboard</h2>
    </div>
        <img src="./aset/admin.png" alt="" />
   </div>
   <div class="card_container">
    <h3 class="main_title">Informasi Data</h3>
    <div class="card_wrapper">
        <div class="data_card light-red">
            <div class="card_header">
                <div class="pengguna">
                    <span class="title">
                        Data Pengguna
                    </span>
                    <?php
                    $sql1 = "SELECT Count(*) as tot1 FROM tb_pengguna";
  $result1 = mysqli_query($koneksi, $sql1);
  $d = mysqli_fetch_array($result1);
  ?>
                    <span class="card_value"><?= $d['tot1'];?> Pengguna</span>
                </div>
                <i class="ri-group-line icon dark-red"></i>
            </div>
        </div>

        <div class="data_card light-purple">
            <div class="card_header">
                <div class="pengguna">
                    <span class="title">
                        Data Bus
                    </span>
                    <?php
                    $sql1 = "SELECT Count(*) as tot FROM tb_bus";
  $result1 = mysqli_query($koneksi, $sql1);
  $d = mysqli_fetch_array($result1);
  ?>
                    <span class="card_value"><?= $d['tot'];?> Bus</span>
                </div>
                <i class="ri-bus-fill icon dark-purple"></i>    
            </div>
        </div>
        
        <div class="data_card light-green">
            <div class="card_header">
                <div class="pengguna">
                    <span class="title">
                        Data Rute
                    </span>
                    <?php
                    $sql1 = "SELECT Count(*) as tot FROM tb_rute INNER JOIN tb_bus ON tb_bus.id_bus=tb_rute.id_bus INNER JOIN tb_terminal ON tb_terminal.id_terminal=tb_rute.id_terminal";
  $result1 = mysqli_query($koneksi, $sql1);
  $d = mysqli_fetch_array($result1);
  ?>
                    <span class="card_value"><?= $d['tot'];?> Rute</span>
                </div>
                <i class="ri-road-map-line icon dark-green"></i>    
            </div>
        </div>

        <div class="data_card light-orange">
            <div class="card_header">
                <div class="pengguna">
                    <span class="title">
                        Data Pesanan
                    </span>
                    <?php
                    $sql1 = "SELECT Count(*) as tot FROM tb_pesanan INNER JOIN tb_rute ON tb_rute.id_rute=tb_pesanan.id_rute INNER JOIN tb_pengguna ON tb_pengguna.id_pengguna=tb_pesanan.id_pengguna";
  $result1 = mysqli_query($koneksi, $sql1);
  $d = mysqli_fetch_array($result1);
  ?>
                    <span class="card_value"><?= $d['tot'];?> Pesanan</span>
                </div>
                <i class="ri-shopping-cart-line icon dark-orange"></i>     
            </div>
        </div>

        <div class="data_card light-blue">
            <div class="card_header">
                <div class="pengguna">
                    <span class="title">
                        Jumlah Pemasukan
                    </span>
                    <?php
                    $sql1 = "SELECT SUM(tb_pesanan.total) as tot FROM tb_pesanan INNER JOIN tb_rute ON tb_rute.id_rute=tb_pesanan.id_rute INNER JOIN tb_pengguna ON tb_pengguna.id_pengguna=tb_pesanan.id_pengguna";
  $result1 = mysqli_query($koneksi, $sql1);
  $d = mysqli_fetch_array($result1);
  ?>
                    <span class="card_value">Rp <?= $d['tot'];?></span>
                </div>  
                <i class="ri-wallet-3-line icon dark-blue"></i>        
            </div>
        </div>
        </div>
    </div>
   </div>
        </section>

    <!--=== BUS ===-->
           

        <!--=== TERMINAL ===-->
           

        <!--=== RUTE ===-->
            

     <!--=== Pengguna ===-->
           


     <!--=== Pesanan ===-->
          
</main>

<script src="../Tiket Bus (PesanUy)/java/dashboard.js"> </script>

    </body>
    </html>