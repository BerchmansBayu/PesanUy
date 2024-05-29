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
        

    <!--=== BUS ===-->
           

        <!--=== TERMINAL ===-->
            

        <!--=== RUTE ===-->
            

     <!--=== Pengguna ===-->
         


     <!--=== Pesanan ===-->
            <section class="Pesanan section" id="Pesanan">
                <div class="main_content">
                 <div class="header_wreaper">
                     <div class="header_title">
                     <span>PesanUy</span>
                     <h2>Pesanan</h2>
                 </div>
                 <img src="./aset/admin.png" alt="" />
                </div>
                <div class="tabular_wrapper">
                    <h3 class="main_title">Data Pesanan</h3>
                      <div class="table_container">
                      <a class="btn btn-danger" href="hapusallpesanan.php">Wipe Data</a>    
                      <a class="btn btn-success" href="cetakpesanan.php">Print Data</a> 
                      <table>
                          <thead>
                              <tr>
                                  <th>Pembeli</th>
                                  <th>Waktu</th>
                                  <th>Harga</th>
                                  <th>Total Harga</th>
                                  <th>Status</th>
                                  <th>Aksi</th>                                                 
                              </tr>
                          </thead>
                              <tbody>
                              <?php
                                $sql2 = "SELECT * FROM tb_pesanan INNER JOIN tb_rute ON tb_rute.id_rute=tb_pesanan.id_rute INNER JOIN tb_pengguna ON tb_pengguna.id_pengguna=tb_pesanan.id_pengguna";
  $result2 = mysqli_query($koneksi, $sql2);
  while($row2 = mysqli_fetch_array($result2)){
  ?>
                               <tr>
                                    <td><?= $row2['nama_pengguna'];?></td> 
                                    <td><?= $row2['waktu_pesanan'];?></td> 
                                    <td><?= $row2['harga'];?></td>
                                    <td><?= $row2['total'];?></td> 
                                    <td><?= $row2['status'];?></td> 
                                    <td>
					<a href="hapuspesanan.php?id=<?php echo $row2['id_pesanan']; ?>">HAPUS</a>
                                    </td>
                                  </tr>  
                                 <?php } ?>
                              </tbody>
                      </table>  
                      </div>
                </div>
            </section>
</main>

<script src="../Tiket Bus (PesanUy)/java/dashboard.js"> </script>

    </body>
    </html>