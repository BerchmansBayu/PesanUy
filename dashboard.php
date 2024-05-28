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
        <div class="data_card light-red">
            <div class="card_header">
                <div class="pengguna">
                    <span class="title">
                        Data Pengguna
                    </span>
                    <span class="card_value">5 Pengguna</span>
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
                    <span class="card_value">8 Bus</span>
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
                    <span class="card_value">10 Rute</span>
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
                    <span class="card_value">2 Pesanan</span>
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
                    <span class="card_value">Rp600.000</span>
                </div>  
                <i class="ri-wallet-3-line icon dark-blue"></i>        
            </div>
        </div>
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
                     <h2>Bus</h2>
                 </div>
                 <img src="./aset/admin.png" alt="" />
                </div>
                <div class="tabular_wrapper">
                    <h3 class="main_title">Data Bus</h3>
                      <div class="table_container">
                        <a class="btn btn-danger" href="hapusall.php">Wipe Data</a>
                        <a class="btn btn-primary" href="tambah.php">Add Data</a> 
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
            <section class="Terminal section" id="Terminal">
                <div class="main_content">
                 <div class="header_wreaper">
                     <div class="header_title">
                     <span>PesanUy</span>
                     <h2>Terminal</h2>
                 </div>
                 <img src="./aset/admin.png" alt="" />
                </div>
                <div class="tabular_wrapper">
                    <h3 class="main_title">Data Terminal</h3>
                      <div class="table_container">
                      <a class="btn btn-danger" href="hapusallterminal.php">Wipe Data</a>
                        <a class="btn btn-primary" href="tambahterminal.php">Add Data</a> 
                        <table>
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Kode</th>
                                    <th>Kota</th>
                                    <th>Aksi</th>                                                 
                                </tr>
                            </thead>
                                <tbody>
                                <?php
                                $sql1 = "SELECT * FROM tb_terminal";
  $result1 = mysqli_query($koneksi, $sql1);
  while($row1 = mysqli_fetch_array($result1)){
  ?>
                                 <tr>
                                    <td><?= $row1['kode_terminal'];?></td> 
                                    <td><?= $row1['nama_terminal'];?></td> 
                                    <td><?= $row1['kota'];?></td>
                                    <td>
                                    <a href="editterminal.php?id=<?php echo $row1['id_terminal']; ?>">EDIT</a>
					<a href="hapusterminal.php?id=<?php echo $row1['id_terminal']; ?>">HAPUS</a>
                                    </td>
                                  </tr>  
                                 <?php } ?>
                                 
                                </tbody>
                        </table> 
                      </div>
                        </div> 
                    </section>

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
            <section class="Pengguna section" id="Pengguna">
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
                      <a class="btn btn-danger" href="hapusallpengguna.php">Wipe Data</a>                
                        <table>
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th> 
                                    <th>Aksi</th>                                               
                                </tr>
                            </thead>
                                <tbody>
                                <?php
                                $sql3 = "SELECT * FROM tb_pengguna";
  $result3 = mysqli_query($koneksi, $sql3);
  while($row3 = mysqli_fetch_array($result3)){
  ?>
                               <tr>
                                    <td><?= $row3['nama_pengguna'];?></td> 
                                    <td><?= $row3['email_pengguna'];?></td> 
                                    <td>
                                    <a href="editpengguna.php?id=<?php echo $row3['id_pengguna']; ?>">EDIT</a>
					<a href="hapuspengguna.php?id=<?php echo $row3['id_pengguna']; ?>">HAPUS</a>
                                    </td>
                                  </tr>  
                                 <?php } ?>
                                  
                                </tbody>
                        </table> 
                      </div>
                        </div> 
                    </section>


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