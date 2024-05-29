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
            <section class="Rute section" id="Rute">
                <div class="main_content">
                 <div class="header_wreaper">
                     <div class="header_title">
                     <span>PesanUy</span>
                     <h2>Rute</h2>
                 </div>
                 <img src="./aset/admin.png" alt="" />
                </div>
                <div class="tabular_wrapper">
                    <h3 class="main_title">Data Rute</h3>
                      <div class="table_container">
                      <a class="btn btn-danger" href="hapusallrute.php">Wipe Data</a>
                        <a class="btn btn-primary" href="tambahrute.php">Add Data</a>
                        <a class="btn btn-success" href="cetakrute.php">Print Data</a> 
                        <table>
                            <thead>
                                <tr>
                                    <th>Tanggal Berangkat</th>
                                    <th>Tanggal Tiba</th>
                                    <th>Waktu Berangkat</th>
                                    <th>Waktu Tiba</th>    
                                    <th>Asal</th>  
                                    <th>Tujuan</th>  
                                    <th>Transportasi</th>  
                                    <th>Harga</th>  
                                    <th>Aksi</th>                                               
                                </tr>
                            </thead>
                                <tbody>
                                <?php
                                $sql2 = "SELECT * FROM tb_rute INNER JOIN tb_bus ON tb_bus.id_bus=tb_rute.id_bus INNER JOIN tb_terminal ON tb_terminal.id_terminal=tb_rute.id_terminal";
  $result2 = mysqli_query($koneksi, $sql2);
  while($row2 = mysqli_fetch_array($result2)){
  ?>
                               <tr>
                                    <td><?= $row2['tanggal_berangkat'];?></td> 
                                    <td><?= $row2['tanggal_tiba'];?></td> 
                                    <td><?= $row2['waktu_berangkat'];?></td>
                                    <td><?= $row2['waktu_tiba'];?></td> 
                                    <td><?= $row2['nama_terminal'];?></td> 
                                    <td><?= $row2['tujuan'];?></td>
                                    <td><?= $row2['nama_bus'];?></td> 
                                    <td><?= $row2['harga'];?></td>
                                    <td>
                                    <a href="editrute.php?id=<?php echo $row2['id_rute']; ?>">EDIT</a>
					<a href="hapusrute.php?id=<?php echo $row2['id_rute']; ?>">HAPUS</a>
                                    </td>
                                  </tr>  
                                 <?php } ?>
                                </tbody>
                        </table> 
                      </div>
                        </div> 
                    </section>

     <!--=== Pengguna ===-->
           


     <!--=== Pesanan ===-->
            
</main>

<script src="../Tiket Bus (PesanUy)/java/dashboard.js"> </script>

    </body>
    </html>