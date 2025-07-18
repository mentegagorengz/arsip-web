<?php
session_start();
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $login = mysqli_query($koneksi, "SELECT * FROM user WHERE user_username='$username' AND user_password='$password'");
    $cek = mysqli_num_rows($login);
    if ($cek > 0) {
        $data = mysqli_fetch_assoc($login);
        $_SESSION['id'] = $data['user_id'];
        $_SESSION['nama'] = $data['user_nama'];
        $_SESSION['username'] = $data['user_username'];
        $_SESSION['role'] = $data['user_role'];
        if ($_SESSION['role'] == "admin") {
            header("Location: admin/");
            exit();
        } else if ($_SESSION['role'] == "petugas") {
            header("Location: petugas/");
            exit();
        } else {
            header("Location: user/");
            exit();
        }
    } else {
        header("Location: login.php?alert=gagal");
        exit();
    }
}
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Masuk Administrator | Aplikasi Pengarsipan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/morrisjs/morris.css">
    <link rel="stylesheet" href="assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="assets/css/metisMenu/metisMenu-vertical.css">
    <link rel="stylesheet" href="assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="assets/css/calendar/fullcalendar.print.min.css">
    <link rel="stylesheet" href="assets/css/form/all-type-forms.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/login-mobile.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#d80027"/>

    <style>
        /* Desktop Styles */
        .login-logo img {
            height: 60px !important;
            margin-top: -8px !important;
        }

        .login-logo b {
            font-size: 22px;
        }

        .login1 h4 {
            font-size: 24px;
            margin: 12px 0;
        }

        /* Mobile Responsive Styles */
        @media (max-width: 768px) {
            .error-pagewrap {
                padding: 10px;
            }

            .content-error {
                margin: 0;
                padding: 20px 15px;
            }

            .content-error > div {
                padding: 15px !important;
                margin: 10px 0;
            }

            .login-logo img {
                height: 40px !important;
                margin-top: -8px !important;
            }

            .login-logo b {
                font-size: 18px;
            }

            .login1 h4 {
                font-size: 20px;
                margin: 10px 0;
            }

            .form-group {
                margin-bottom: 15px;
            }

            .form-login {
                font-size: 14px;
                padding: 12px 40px 12px 15px;
            }

            .icon {
                font-size: 16px;
            }

            .loginbtn {
                padding: 12px;
                font-size: 16px;
            }

            .alert {
                font-size: 14px;
                padding: 10px;
                margin-bottom: 15px;
            }
        }

        @media (max-width: 480px) {
            .content-error > div {
                padding: 10px !important;
                margin: 5px 0;
            }

            .login-logo img {
                height: 35px !important;
            }

            .login-logo b {
                font-size: 16px;
            }

            .login1 h4 {
                font-size: 18px;
            }

            .form-login {
                font-size: 13px;
                padding: 10px 35px 10px 12px;
            }

            .loginbtn {
                padding: 10px;
                font-size: 14px;
            }
        }
    </style>
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div class="error-pagewrap" style=" height: 100vh;">
        <div class="error-page-int">
            <div class="text-center m-b-md custom-login">

                <p class="text-white bg-dark"></p>

            </div>
            <div class="content-error .bg-danger">
                <?php
                // pesan notifikasi

                if(isset($_GET['alert'])){
                    if($_GET['alert'] == "gagal"){
                        echo "<div class='alert alert-danger'>MASUK GAGAL! NAMA PENGGUNA DAN KATA SANDI SALAH!</div>";
                    }else if($_GET['alert'] == "logout"){
                        echo "<div class='alert alert-success'>ANDA TELAH BERHASIL KELUAR</div>";
                    }else if($_GET['alert'] == "belum_login"){
                        echo "<div class='alert alert-warning'>ANDA HARUS MASUK UNTUK MENGAKSES DASBOR</div>";
                    }
                }
                ?>
                <div style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); padding: 20px; border-radius: 10px; color: #fff; box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);">
                        <br>
                        <br>
                        <center>
                        <div style="color:#fff" class="login-logo">
                        <img style="margin-top:-12px" src="assets/img/Logo.png" alt="Logo" height="50"> <b>Elektronik Arsip</b>
                        </div>
                        <div style="color:#fff" class="login1">
                        <h4>MASUK</h4></div>
                        </center>
                        <br>
                        <br>

                        <form method="POST" action="login.php" id="loginForm">
                            <div class="form-group">
                                <input type="text" placeholder="nama pengguna" title="Silakan masukkan nama pengguna Anda" required="required" autocomplete="off" name="username" id="username" class="form-login">
                              <div class="icon"><i style="color:#fff" class="bx bx-user"></i></div>
                            </div>
                            <div class="form-group">
                                <input type="password" title="Silakan masukkan kata sandi Anda" placeholder="******" required="required" autocomplete="off" name="password" id="password" class="form-login">
                                <div class="icon"><i style="color:#fff" class="bx bx-lock"></i></div>
                            </div>

                            <input type="submit" class="btn btn-success btn-block loginbtn" value="Masuk">
                        </form>
                        </div>
                <a href="index.php">Kembali</a>
            </div>
        </div>
    </div>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery-price-slider.js"></script>
    <script src="assets/js/jquery.meanmenu.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <script src="assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="assets/js/metisMenu/metisMenu-active.js"></script>
    <script src="assets/js/tab.js"></script>
    <script src="assets/js/icheck/icheck.min.js"></script>
    <script src="assets/js/icheck/icheck-active.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('/sw.js')
                .then(function(registration) {
                    console.log('ServiceWorker registration successful with scope: ', registration.scope);
                }, function(error) {
                    console.log('ServiceWorker registration failed: ', error);
                });
            });
        }
    </script>

</body>
</html>