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
            <a href="#Dashboard"> 
                <i class="ri-dashboard-2-line"></i>
                <span>Menu</span>
            </a>  
        </li>
    <li>
        <a href="#Bus">
            <i class="ri-bus-fill"></i>
            <span>Bus</span>
        </a>  
    </li>
    <li>
        <a href="#Terminal">
            <i class="ri-building-line"></i>
            <span>Halte</span>
        </a>  
    </li>
    <li>
        <a href="#Rute">
            <i class="ri-road-map-line"></i>
            <span> Rute</span>
        </a>  
    </li>
    <li>
        <a href="#Pengguna">
            <i class="ri-group-line"></i>
            <span>User</span>
        </a>  
    </li>
    <li>
        <a href="#Pesanan">
            <i class="ri-shopping-cart-line"></i>
            <span>Pesan</span>
        </a>  
    </li>
    <li class="logout">
        <a href="login.php">
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
        

        
        
        

        

        
        </div>
    </div>
   </div>
        </section>

    <!--=== BUS ===-->
            <section class="Bus section" id="Bus">
                <div class="main_content">
                 <div class="header_wreaper">
                     <div class="header_title">
                     <span>PesanUy</span>
                     <h2>Pengguna</h2>
                 </div>
                 <img src="./aset/admin.png" alt="" />
                </div>
                <div class="tabular_wrapper">
                    <h3 class="main_title">Data Pengguna</h3>
                      <div class="table_container">
                      <?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from tb_pengguna where id_pengguna='$id'");
	while($row = mysqli_fetch_array($data)){
		?>
                      <form method="post" action="ubah_aksi.php">
		<table>
        <tr>			
				<td>Nama Pengguna</td>
				<td><input type="text" name="nama_pengguna" value="<?= $row['nama_pengguna'];?>">
                <input type="hidden" name="id_pengguna" value="<?= $row['id_pengguna'];?>">
            </td>
			</tr>
			<tr>			
				<td>Email</td>
				<td><input type="email" name="email_pengguna" value="<?= $row['email_pengguna'];?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="<?= $row['password'];?>"></td>
			</tr>
			<tr>
				<td>Level</td>
				<td><select name="level" id="">
                    <option value="Admin">Admin</option>
                    <option value="Pengguna">Pengguna</option>
                </select></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="UBAH DATA"></td>
			</tr>		
		</table>
	</form>
    <?php } ?>
                      </div>
                        </div> 
                    </section>

        <!--=== TERMINAL ===-->
            <section class="Terminal section" id="Terminal">
                <div class="main_content">
                
                <div class="tabular_wrapper">
                   
                      <div class="table_container">
                       
                        
                      </div>
                        </div> 
                    </section>

        <!--=== RUTE ===-->
            <section class="Rute section" id="Rute">
                <div class="main_content">
                 
                <div class="tabular_wrapper">
                   
                      <div class="table_container">
                      
                        
                      </div>
                        </div> 
                    </section>

     <!--=== Pengguna ===-->
            <section class="Pengguna section" id="Pengguna">
                <div class="main_content">
                 
                <div class="tabular_wrapper">
                   
                      <div class="table_container">
                                      
                       
                      </div>
                        </div> 
                    </section>


     <!--=== Pesanan ===-->
            <section class="Pesanan section" id="Pesanan">
                <div class="main_content">
                 
                <div class="tabular_wrapper">
                    
                      <div class="table_container">
                       
                     
                      </div>
                </div>
            </section>
</main>

<script src="../Tiket Bus (PesanUy)/java/dashboard.js"> </script>

    </body>
    </html>