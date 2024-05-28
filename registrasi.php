<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login&Regis.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <title>LoginUser</title>
</head>
<body>
    <div class="container">
        <div class="forms">
            <div class="form registrasi">
                <div class="header">
                    <div class="logo-wrapper">
                        <img src="aset/logo.png" alt="Logo" class="logo" width="80" height="80">
                    </div>
                    <span class="title">REGISTER</span>
                    <form action="register-proses.php" method="post">
                        <div class="input-field">
                            <input type="text" name="nama_pengguna" placeholder="Masukan Username" required>
                            <i class="uil uil-user icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="text" name="email_pengguna" placeholder="Masukan Email" required>
                            <i class="uil uil-envelope-alt icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="password" name="password" placeholder="Masukan Password" required>
                            <i class="uil uil-padlock icon"></i>
                        </div>
                        <div class="input-field">
                           <select name="level"required>
                            <option value="Admin">Admin</option>
                            <option value="Pengguna">Pengguna</option>
                           </select>
                           
                        </div>
                        <div class="button">
                            <input type="submit" name="registrasi" value="Regis Now" id="regisButton">
                        </div>
                    </form>
                    <div class="login-signup">
                        <span class="text">Sudah Punya Akun ? <a href="../Tiket Bus (PesanUy)/login.html" class="text signup-text">Login Sekarang</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="../Tiket Bus (PesanUy)/java/registrasi.js"> </script>
</body>
</html>