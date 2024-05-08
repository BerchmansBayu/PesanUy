<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--=== REMIXICON ===-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
<!--=== CSS ===-->
<link rel="stylesheet" href="./css/dashboard.css">
    <title>Dashboard Admin</title>
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
                        <button class="delete-all-btn">Wipe Data</button>
                        <button class="add-data-btn">Add Data</button> 
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
                                  <tr>
                                    <td>Jkt01</td> 
                                    <td>Purnama</td> 
                                    <td>Ekonomi</td>
                                    <td>20</td>
                                    <td><button>Edit</button> <button>Delete</button></td>
                                  </tr>  
                                  <tr>
                                    <td>Mlng01</td> 
                                    <td>Mekar Sari</td> 
                                    <td>Bisnis</td>
                                    <td>25</td>
                                    <td><button>Edit</button> <button>Delete</button></td>
                                  </tr> 
                                  <tr>
                                    <td>Bl01</td> 
                                    <td>Ksatria Kijang</td> 
                                    <td>Eksekutif</td>
                                    <td>30</td>
                                    <td><button>Edit</button> <button>Delete</button></td>
                                  </tr> 
                                  <tr>
                                  <td>Jyg01</td> 
                                  <td>Jaya Kencana</td> 
                                  <td>VIP</td>
                                  <td>15</td>
                                  <td><button>Edit</button> <button>Delete</button></td>
                                </tr>
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
                        <button class="delete-all-btn">Wipe Data</button>
                        <button class="add-data-btn">Add Data</button> 
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
                                  <tr>
                                    <td>Kampung Melayu</td> 
                                    <td>KM</td> 
                                    <td>Jakarta</td>
                                    <td><button>Edit</button> <button>Delete</button></td>
                                  </tr>  
                                  <tr>
                                    <td>Pulo Gadung</td> 
                                    <td>PG</td> 
                                    <td>Jakarta</td>
                                    <td><button>Edit</button> <button>Delete</button></td>
                                  </tr> 
                                  <tr>
                                    <td>Ladungsari</td> 
                                    <td>LS</td> 
                                    <td>Malang</td>
                                    <td><button>Edit</button> <button>Delete</button></td>
                                  </tr> 
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
                        <button class="delete-all-btn">Wipe Data</button>
                        <button class="add-data-btn">Add Data</button> 
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
                                  <tr>
                                    <td>2024-04-1</td> 
                                    <td>2024-04-02</td> 
                                    <td>07.00</td>
                                    <td>10.00</td>
                                    <td>Kampung Melayu</td>
                                    <td>Ladungsari</td>
                                    <td>Jaya Kencana</td>
                                    <td>500.000</td>
                                    <td><button>Edit</button> <button>Delete</button></td>
                                  </tr>  
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
                        <button class="delete-all-btn">Wipe Data</button>                   
                        <table>
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th> 
                                    <th>Aksi</th>                                               
                                </tr>
                            </thead>
                                <tbody>
                                  <tr>
                                    <td>Bayu Jaya</td> 
                                    <td>bayu@gmail.com</td> 
                                    <td><button>Delete</button></td>
                                  </tr>  
                                  <tr>
                                    <td>Markus</td> 
                                    <td>markus@gmail.com</td> 
                                    <td><button>Delete</button></td>
                                  </tr>  
                                  <tr>
                                    <td>matius Jaya</td> 
                                    <td>matius@gmail.com</td> 
                                    <td><button>Delete</button></td>
                                  </tr>  
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
                        <button class="delete-all-btn">Wipe Data</button>
                      <table>
                          <thead>
                              <tr>
                                  <th>Pembeli</th>
                                  <th>Waktu</th>
                                  <th>Harga</th>
                                  <th>Status</th>
                                  <th>Aksi</th>                                                 
                              </tr>
                          </thead>
                              <tbody>
                                <tr>
                                  <td>Makrus</td> 
                                  <td>1 April 2024 17.05</td> 
                                  <td>Rp 300.000</td>
                                  <td>Terbayar</td>
                                  <td><button>Delete</button></td>
                                </tr>  
                                <tr>
                                  <td>Matius</td> 
                                  <td>4 April 2024 18.05</td> 
                                  <td>Rp 300.000</td>
                                  <td>Terbayar</td>
                                  <td><button>Delete</button></td>
                                </tr> 
                              </tbody>
                      </table>  
                      </div>
                </div>
            </section>
</main>

<script src="../Tiket Bus (PesanUy)/java/dashboard.js"> </script>

    </body>
    </html>