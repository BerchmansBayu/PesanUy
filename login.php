<?php
// Memulai session
session_start();

// Memeriksa apakah pengguna sudah login
if (isset($_SESSION['email'])) {
    // Pengguna sudah login, redirect ke halaman index.php atau dashboard.php
    if ($_SESSION['email'] == 'admin@gmail.com') {
        header("Location: dashboard.php");
    } else {
        header("Location: index.php");
    }
    exit();
}

// Memeriksa apakah form login telah dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai email dan password dari form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Lakukan validasi login di sini (misalnya, dengan memeriksa database)
    // Contoh sederhana:
    if ($email == "bayu@gmail.com" && $password == "bayu") {
        // Login berhasil sebagai pengguna biasa, menyimpan email ke dalam session
        $_SESSION['email'] = $email;

        // Menyimpan remember me ke dalam cookie
        if (isset($_POST["remember_me"])) {
            $expired = time() + (86400 * 30); // 30 hari
            setcookie("email", $email, $expired);
        }

        // Redirect ke halaman index.php setelah menampilkan alert box
        echo "<script>alert('Yeah Login Berhasil'); window.location.href = 'index.php';</script>";
        exit();
    } elseif ($email == "pemilik@gmail.com" && $password == "123admin") {
        // Login berhasil sebagai admin, menyimpan email ke dalam session
        $_SESSION['email'] = $email;

        // Menyimpan remember me ke dalam cookie
        if (isset($_POST["remember_me"])) {
            $expired = time() + (86400 * 30); // 30 hari
            setcookie("email", $email, $expired);
        }

        // Redirect ke halaman dashboard.php setelah menampilkan alert box
        echo "<script>alert('Yeah Login Berhasil'); window.location.href = 'dashboard.php';</script>";
        exit();
    } else {
        $error_message = "Email atau password salah.";
    }
}

// Mendapatkan nilai email dari cookie jika tersedia
$email_cookie = isset($_COOKIE["email"]) ? $_COOKIE["email"] : "";
?>

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
            <div class="form login">
                <div class="header">
                    <div class="logo-wrapper">
                        <img src="aset/logo.png" alt="Logo" class="logo" width="80" height="80">
                    </div>
                    <span class="title">LOGIN</span>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <?php if (isset($error_message)) { ?>
                            <div class="error-message"><?php echo $error_message; ?></div>
                        <?php } ?>
                        <div class="input-field">
                            <input type="text" placeholder="Masukan Email" name="email" value="<?php echo $email_cookie; ?>" required>
                            <i class="uil uil-envelope-alt icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="password" placeholder="Masukan Password" name="password" required>
                            <i class="uil uil-padlock icon"></i>
                        </div>
                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="remember_me" name="remember_me" <?php echo $email_cookie ? 'checked' : ''; ?>>
                                <label for="remember_me" class="text">Remember me</label>
                            </div>
                        </div>
                        <div class="button">
                            <input type="submit" value="Login Now">
                        </div>
                    </form>
                    <div class="login-signup">
                        <span class="text">Belum Punya Akun ? <a href="registrasi.php" class="text signup-text">Buat Akun Yuk</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>