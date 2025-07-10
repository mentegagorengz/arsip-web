<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin - Aplikasi Pengarsipan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.css">
    <link rel="stylesheet" href="../assets/css/owl.transitions.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/educate-custon-icon.css">
    <link rel="stylesheet" href="../assets/css/morrisjs/morris.css">
    <link rel="stylesheet" href="../assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="../assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../assets/css/metisMenu/metisMenu-vertical.css">
    <link rel="stylesheet" href="../assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../assets/css/calendar/fullcalendar.print.min.css">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="stylesheet" type="text/css" href="../assets/js/DataTables/datatables.css">

    <style>
        /* Show navbar on desktop, hide on mobile */
        .desktop-navbar {
            display: block;
        }
        
        @media (max-width: 768px) {
            .desktop-navbar {
                display: none !important;
            }
        }

        /* Sidebar active menu styling */
        .left-custom-menu-adp-wrap ul.left-sidebar-menu-pro li.active > a {
            background: #d80027 !important;
            color: white !important;
            border-left: 4px solid #b70020;
            position: relative;
        }

        .left-custom-menu-adp-wrap ul.left-sidebar-menu-pro li.active > a:hover,
        .left-custom-menu-adp-wrap ul.left-sidebar-menu-pro li.active > a:focus {
            background: #b70020 !important;
            color: white !important;
        }

        /* Sidebar hover effect for other menu items */
        .left-custom-menu-adp-wrap ul.left-sidebar-menu-pro li:not(.active) > a:hover {
            background: #f5f5f5 !important;
            color: #d80027 !important;
            transition: all 0.3s ease;
        }

        /* Icon styling for active menu */
        .left-custom-menu-adp-wrap ul.left-sidebar-menu-pro li.active > a .educate-icon {
            color: white !important;
        }

        /* Mobile menu active styling */
        .mobile-menu-nav li.active > a {
            background: #d80027 !important;
            color: white !important;
        }

        .mobile-menu-nav li.active > a .educate-icon {
            color: white !important;
        }

        .mobile-menu-nav li:not(.active) > a:hover {
            background: #f5f5f5 !important;
            color: #d80027 !important;
            transition: all 0.3s ease;
        }
    </style>

    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <?php 
    include '../koneksi.php';
    session_start();
    if($_SESSION['role'] != "admin"){
        header("location:../login.php?alert=belum_login");
    }

    // Get current page name
    $current_page = basename($_SERVER['PHP_SELF']);
    ?>
</head>
<body>
    <div class="left-sidebar-pro">
        <nav id="sidebar" style="max-width: 50px;">
            <div class="sidebar-header" style="background blue">
                <a href="index.php">
                    <img src="../assets/img/logo/logo.png" alt="Logo" class="img-responsive" style="width: 100%; max-width: 150px; height: auto;" />
                </a>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro" style="margin-top: 30px">

                    <ul class="metismenu" id="menu1">
                        <li class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                            <a href="index.php">
                                <span class="educate-icon educate-home icon-wrap"></span>
                                <span class="mini-click-non">Dashboard</span>
                            </a>
                        </li>

                        <li class="<?php echo ($current_page == 'arsip.php') ? 'active' : ''; ?>">
                            <a href="arsip.php" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Arsip Saya</span></a>
                        </li>
                        <li class="<?php echo ($current_page == 'arsip_masuk.php') ? 'active' : ''; ?>">
                            <a href="arsip_masuk.php" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Document Masuk</span></a>
                        </li>
                        <li class="<?php echo ($current_page == 'arsip_keluar.php') ? 'active' : ''; ?>">
                            <a href="arsip_keluar.php" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Document Keluar</span></a>
                        </li>

                        <li class="<?php echo ($current_page == 'kategori.php') ? 'active' : ''; ?>">
                            <a href="kategori.php" aria-expanded="false"><span class="educate-icon educate-course icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Kategori</span></a>
                        </li>

                        <li class="<?php echo ($current_page == 'user.php') ? 'active' : ''; ?>">
                            <a href="user.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data User</span></a>
                        </li>

                        <li class="<?php echo ($current_page == 'riwayat.php') ? 'active' : ''; ?>">
                            <a href="riwayat.php" aria-expanded="false"><span class="educate-icon educate-form icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Riwayat Unduh</span></a>
                        </li>


                        <li class="<?php echo ($current_page == 'gantipassword.php') ? 'active' : ''; ?>">
                            <a href="gantipassword.php" aria-expanded="false"><span class="educate-icon educate-danger icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Ganti Password</span></a>
                        </li>

                        <li>
                            <a href="logout.php" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Logout</span></a>
                        </li>

                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        
        <div class="header-advance-area">
            <div class="navbar navbar-light desktop-navbar" style="background-color: #d80027;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn" style="background-color: #d80027; border: none;">
                                                <div style="width: 20px; height: 2px; background-color: white; margin: 3px 0;"></div>
                                                <div style="width: 20px; height: 2px; background-color: white; margin: 3px 0;"></div>
                                                <div style="width: 20px; height: 2px; background-color: white; margin: 3px 0;"></div>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-4 col-xs-4" style="padding-left: 0; margin-left: -30px;">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav" style="margin: 0;">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link" style="color: white; font-size: 18px; font-weight: 600; text-decoration: none; padding: 15px 0; padding-left: 5px; display: flex; align-items: center; height: 50px;">
                                                        Aplikasi Pengarsipan
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="profil.php" class="nav-link" style="color: white; text-decoration: none;">
                                                        <?php 
                                                        $id_admin = $_SESSION['id'];
                                                        $profil = mysqli_query($koneksi,"select * from user where user_id='$id_admin'");
                                                        $profil = mysqli_fetch_assoc($profil);
                                                        if($profil['user_foto'] == ""){ 
                                                            ?>
                                                            <img src="../gambar/sistem/user.png" style="width: 25px; height: 25px; border-radius: 50%; margin-right: 8px; vertical-align: middle;">
                                                        <?php }else{ ?>
                                                        <img src="../gambar/user/<?php echo $profil['user_foto'] ?>" style="width: 25px; height: 25px; border-radius: 50%; margin-right: 8px; vertical-align: middle;">
                                                        <?php } ?>
                                                        <span class="admin-name" style="font-weight: 500;"><?php echo $_SESSION['nama']; ?> | Administrator</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area" style="background-color: #d80027;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                                    <a href="index.php">
                                        <span class="mini-click-non">Dashboard</span>
                                    </a>
                                </li>
                                <li class="<?php echo ($current_page == 'kategori.php') ? 'active' : ''; ?>">
                                    <a href="kategori.php" aria-expanded="false"><span class="educate-icon educate-course icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Kategori</span></a>
                                </li>

                                <!-- <li>
                                    <a href="petugas.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Petugas</span></a>
                                </li> -->

                                <li class="<?php echo ($current_page == 'user.php') ? 'active' : ''; ?>">
                                    <a href="user.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data User</span></a>
                                </li>

                                <li class="<?php echo ($current_page == 'arsip.php') ? 'active' : ''; ?>">
                                    <a href="arsip.php" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Arsip</span></a>
                                </li>

                                <li class="<?php echo ($current_page == 'riwayat.php') ? 'active' : ''; ?>">
                                    <a href="riwayat.php" aria-expanded="false"><span class="educate-icon educate-form icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Riwayat Unduh</span></a>
                                </li>

                                <li class="<?php echo ($current_page == 'gantipassword.php') ? 'active' : ''; ?>">
                                    <a href="gantipassword.php" aria-expanded="false"><span class="educate-icon educate-danger icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Ganti Password</span></a>
                                </li>

                                <li class="<?php echo ($current_page == 'profil.php') ? 'active' : ''; ?>">
                                    <a href="profil.php" aria-expanded="false">
                                        <?php 
                                        $id_admin = $_SESSION['id'];
                                        $profil = mysqli_query($koneksi,"select * from user where user_id='$id_admin'");
                                        $profil = mysqli_fetch_assoc($profil);
                                        if($profil['user_foto'] == ""){ 
                                            ?>
                                            <img src="../gambar/sistem/user.png" style="width: 20px;height: 20px">
                                        <?php }else{ ?>
                                        <img src="../gambar/user/<?php echo $profil['user_foto'] ?>" style="width: 20px;height: 20px">
                                        <?php } ?>
                                        <span class="mini-click-non"><?php echo $_SESSION['nama']; ?> [ <b>Administrator</b> ]</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="logout.php" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Logout</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

