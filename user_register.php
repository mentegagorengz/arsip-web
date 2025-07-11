<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Daftar Pengguna | Aplikasi Pengarsipan</title>
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
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="text-center m-b-md custom-login">
                <h3>Aplikasi</h3>
                <h4>Pengarsipan</h4>

                <br>

                <p>Silahkan daftar untuk mengakses arsip.</p>

            </div>
            <div class="content-error">
                <?php
                if (isset($_GET['alert'])) {
                    if ($_GET['alert'] == "gagal") {
                        echo "<div class='alert alert-danger'>DAFTAR GAGAL! NAMA PENGGUNA DAN KATA SANDI SALAH!</div>";
                    } else if ($_GET['alert'] == "logout") {
                        echo "<div class='alert alert-success'>ANDA TELAH BERHASIL KELUAR</div>";
                    } else if ($_GET['alert'] == "belum_login") {
                        echo "<div class='alert alert-warning'>ANDA HARUS MASUK UNTUK MENGAKSES DASBOR</div>";
                    }
                }
                ?>
                <div class="hpanel">
                    <div class="panel-body">

                        <br>
                        <br>
                        <center>
                            <h4>DAFTAR PENGGUNA</h4>
                        </center>
                        <br>
                        <br>

                        <form action="periksa_user_register.php" method="POST" id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="name">Nama</label>
                                <input type="text" placeholder="nama" title="Silakan masukkan nama Anda" required="required" autocomplete="off" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="username">Nama Pengguna</label>
                                <input type="text" placeholder="nama pengguna" title="Silakan masukkan nama pengguna Anda" required="required" autocomplete="off" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Kata Sandi</label>
                                <input type="password" title="Silakan masukkan kata sandi Anda" placeholder="******" required="required" autocomplete="off" name="password" id="password" class="form-control">
                            </div>

                            <!-- <div class="form-group">
                                <label>Foto</label>
                                <input type="file" name="foto">
                            </div> -->

                            <input type="submit" class="btn btn-success btn-block loginbtn" value="Daftar">
                        </form>

                        <br>

                    </div>
                </div>
                <br>
                <a href="user_login.php">Masuk</a>
                <a href="index.php">Beranda</a>
                <br>
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

    <body class="hold-transition login-page" style="background:url(gambar/depan/bg.jpg)
no-repeat center center fixed; background-size: cover;
 -webkit-background-size: cover; 
 -moz-background-size: cover; -o-background-size: cover;">
    </body>

</html>