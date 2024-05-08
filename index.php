<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css" />
    <title>Index | PesanUy</title>
</head>
<body>

    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close">&times;</span>
            <h1>Hasil Pencarian Bus</h1>
            <h2>Surabaya (Kampung Melayu) ke Malang (Landungsari)</h2>
            <h3>Kamis, 04 April 2024</h3>
            <h3>1 Penumpang</h3>
            <form>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Transportasi</th>
                            <th>Berangkat</th>
                            <th>Tiba</th>
                            <th>Kelas</th>
                            <th>Harga per Orang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Purnama</td>
                            <td>07.00</td>
                            <td>10.00</td>
                            <td>Economy</td>
                            <td>500000</td>
                            <td><button type="button">PESAN</button></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    

    <nav>
        <div class="nav_logo">PesanUy</div>
        <a href="login.php" class="btn">Masuk/Daftar</a>
    </nav>
    <header class="section_container header_container">
        <h1 class="section_header">Temukan dan Booking Sekarang<br />Dapatkan Pengalaman Terbaik Bersama PesanUy</h1>
        <div class="carousel">
            <img src="aset/EKONOMI.png" alt="header" />
            <img src="aset/BISNIS.png" alt="header" />
            <img src="aset/EKSEKUTIF.png" alt="header" />
            <div class="carousel-buttons">
                <button class="btn btn-prev">&#10094;</button>
                <button class="btn btn-next">&#10095;</button>
            </div>
        </div>
        
        
    </header>
    <section class="section_container booking_container">
        <div class="booking_nav">
            <span>Pencarian Tiket</span>
        </div>
        <form>
            <div class="form_group">
                <div class="input_content">
                    <div class="input_group">
                        <input type="text">
                        <label>Kota Asal</label>
                    </div>
                    <p>Dimana Asal Kota Anda?</p>
                </div>
            </div>

            <div class="form_group">
                <div class="input_content">
                    <div class="input_group">
                        <input type="text">
                        <label>Kota Tujuan</label>
                    </div>
                    <p>Kemana Tujuan Kota Anda?</p>
                </div>
            </div>

            <div class="form_group">
                <div class="input_content">
                    <div class="input_group">
                        <input type="number">
                        <label>Penumpang</label>
                    </div>
                    <p>Berapa Jumlah Penumpang?</p>
                </div>
            </div>

            <div class="form_group">
                <div class="input_content">
                    <div class="input_group">
                        <input type="date">

                    </div>
                    <p>Kapan Tanggal Berangkat?</p>
                </div>
            </div>
            <button class="btn">Search</button>
        </form>
    </section>
    <script src="../Tiket Bus (PesanUy)/java/index.js"> </script>
    


</body>
</html>