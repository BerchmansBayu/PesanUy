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
  <main class="min">
    <!--=== DASHBOARD ===-->
        

    <!--=== BUS ===-->
            <section class="Bus section" id="Bus">
                <div class="main_content">
                 <div class="header_wreaper">
                     <div class="header_title">
                     <span>PesanUy</span>
                     <h2>Bus</h2>
                 </div>
                 <img src="./aset/admin.png" alt="" />
                </div>
                <div class="tabular_wrapper">
                    <h3 class="main_title">Data Bus</h3>
                      <div class="table_container">
                        <a class="btn btn-danger" href="hapusall.php">Wipe Data</a>
                        <a class="btn btn-primary" href="tambah.php">Add Data</a> 
                        <a class="btn btn-success" href="cetakbus.php">Print Data</a> 
                        <table>
                            <thead>
                                <tr>
                                    <th>Kode Bus</th>
                                    <th>Nama Bus</th>
                                    <th>Kelas</th>
                                    <th>Jumlah Kursi</th>
                                    <th>Aksi</th>                                                 
                                </tr>
                            </thead>
                                <tbody>
                                    <?php
                                $sql = "SELECT * FROM tb_bus";
  $result = mysqli_query($koneksi, $sql);
  while($row = mysqli_fetch_array($result)){
  ?>
                                  <tr>
                                    <td><?= $row['kode_bus'];?></td> 
                                    <td><?= $row['nama_bus'];?></td> 
                                    <td><?= $row['kelas_bus'];?></td>
                                    <td><?= $row['jumlah_kursi'];?></td>
                                    <td>
                                    <a href="edit.php?id=<?php echo $row['id_bus']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $row['id_bus']; ?>">HAPUS</a>
                                    </td>
                                  </tr>  
                                 <?php } ?>
                                </tbody>
                        </table> 
                      </div>
                        </div> 
                    </section>

        <!--=== TERMINAL ===-->
          

        <!--=== RUTE ===-->
           

     <!--=== Pengguna ===-->
           


     <!--=== Pesanan ===-->
            
</main>

<script src="../Tiket Bus (PesanUy)/java/dashboard.js"> </script>

    </body>
    </html>