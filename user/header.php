<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>User - Aplikasi Pengarsipan</title>
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
    <link rel="stylesheet" href="../assets/css/mobile-responsive.css">
    
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
        
        /* Mobile Responsive Styles for User Panel */
        @media (max-width: 768px) {
            .left-sidebar-pro {
                position: fixed;
                left: -250px;
                transition: left 0.3s ease;
                z-index: 1000;
                width: 250px;
            }
            
            .left-sidebar-pro.active {
                left: 0;
            }
            
            .all-content-wrapper {
                margin-left: 0 !important;
                padding-left: 0 !important;
            }
            
            .mobile-menu-toggle {
                display: block;
                position: fixed;
                top: 15px;
                left: 15px;
                z-index: 1001;
                background: #fff;
                border: none;
                padding: 8px;
                border-radius: 4px;
                box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            }
            
            .mobile-menu-toggle i {
                font-size: 18px;
                color: #333;
            }
            
            .mobile-overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0,0,0,0.5);
                z-index: 999;
            }
            
            .mobile-overlay.active {
                display: block;
            }
            
            .header-top-area {
                padding-left: 50px;
            }
        }
        
        .mobile-menu-toggle {
            display: none;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="../assets/js/DataTables/datatables.css">

    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <?php 
    include '../koneksi.php';
    session_start();
    if($_SESSION['role'] != "user"){
        header("location:../login.php?alert=belum_login");
    }
    ?>
</head>
<body>
    <!-- Mobile Menu Toggle Button -->
    <!-- <button class="mobile-menu-toggle" onclick="toggleMobileMenu()">
        <i class="fa fa-bars"></i>
    </button> -->
    
    <!-- Mobile Overlay -->
    <div class="mobile-overlay" onclick="closeMobileMenu()"></div>
    
    <div class="left-sidebar-pro">
        <nav id="sidebar" style="max-width: 50px;">
            <div class="sidebar-header">
                <a href="index.html"><img src="../assets/img/logo/logo.png" alt="" /></a>
                <button class="mobile-close-btn" onclick="closeMobileMenu()" style="display: none; position: absolute; top: 10px; right: 10px; background: none; border: none; color: #fff; font-size: 20px;">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">

                <nav class="sidebar-nav left-sidebar-menu-pro" style="margin-top: 30px">

                        <ul class="metismenu" id="menu1">
                            <li class="active">
                                <a href="index.php">
                                    <span class="educate-icon educate-home icon-wrap"></span>
                                    <span class="mini-click-non">Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="arsip.php" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Arsip</span></a>
                            </li>

                            <li>
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
            <div class="navbar navbar-light desktop-navbar" style="background-color: #404040;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn" style="background-color: #fff">
                                                <i class="educate-icon educate-nav" ></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                                                <li class="nav-item"><a href="arsip.php" class="nav-link">Semua Arsip</a></li>
                                                <li class="nav-item dropdown res-dis-nn">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Kategori <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                                    <div role="menu" class="dropdown-menu animated zoomIn">

                                                     <?php 
                                                     $no = 1;
                                                     $kategori = mysqli_query($koneksi,"SELECT * FROM kategori");
                                                     while($p = mysqli_fetch_array($kategori)){
                                                        ?>
                                                        <a href="arsip.php?kategori=<?php echo $p['kategori_id'] ?>" class="dropdown-item"><?php echo $p['kategori_nama'] ?></a>
                                                        <?php 
                                                    }
                                                    ?>

                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle" ><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt" style="background-color: #fff"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notification</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <?php 
                                                            $id_saya = $_SESSION['id'];
                                                            $arsip = mysqli_query($koneksi,"SELECT * FROM riwayat,arsip,user WHERE riwayat_arsip=arsip_id and riwayat_user=user_id and arsip_petugas='$id_saya' ORDER BY riwayat_id DESC");
                                                            while($p = mysqli_fetch_array($arsip)){
                                                                ?>
                                                                <li>
                                                                    <a href="riwayat.php">
                                                                        <div class="notification-content">
                                                                           <p>
                                                                            <small><i><?php echo date('H:i:s  d-m-Y',strtotime($p['riwayat_waktu'])) ?></i></small>
                                                                            <br>
                                                                            <b><?php echo $p['user_nama'] ?></b> menunduh <b><?php echo $p['arsip_nama'] ?></b>.
                                                                        </p>
                                                                    </div>
                                                                </a>
                                                                <hr>
                                                            </li>
                                                            <?php 
                                                        }
                                                        ?>
                                                    </ul>
                                                    <div class="notification-view">
                                                        <a href="#">View All Notification</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">

                                                    <?php 
                                                    $id_user = $_SESSION['id'];
                                                    $profil = mysqli_query($koneksi,"select * from user where user_id='$id_user'");
                                                    $profil = mysqli_fetch_assoc($profil);
                                                    if($profil['user_foto'] == ""){ 
                                                        ?>
                                                        <img src="../gambar/sistem/user.png" style="width: 20px;height: 20px">
                                                        <?php 
                                                    }else{ 
                                                        ?>
                                                        <img src="../gambar/user/<?php echo $profil['user_foto'] ?>" style="width: 20px;height: 20px">
                                                        <?php 
                                                    } 
                                                    ?>
                                                    <span class="admin-name"><?php echo $_SESSION['nama']; ?> [ <b>User</b> ]</span>
                                                    <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                </a>
                                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    <li><a href="profil.php"><span class="edu-icon edu-home-admin author-log-ic"></span>Profil Saya</a></li>
                                                    <li><a href="logout.php"><span class="edu-icon edu-locked author-log-ic"></span>Logout</a></li>
                                                </ul>
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
        <div class="mobile-menu-area" style="background-color: #404040;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <li class="active">
                                        <a href="index.php"> 
                                            <span class="educate-icon educate-home icon-wrap"></span>
                                            <span class="mini-click-non">Dashboard</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="arsip.php" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Arsip</span></a>
                                    </li>

                                    <li>
                                        <a href="gantipassword.php" aria-expanded="false"><span class="educate-icon educate-danger icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Ganti Password</span></a>
                                    </li>

                                    <li>
                                        <a href="profil.php" aria-expanded="false">
                                            <?php 
                                            $id_user = $_SESSION['id'];
                                            $profil = mysqli_query($koneksi,"select * from user where user_id='$id_user'");
                                            $profil = mysqli_fetch_assoc($profil);
                                            if($profil['user_foto'] == ""){ 
                                                ?>
                                                <img src="../gambar/sistem/user.png" style="width: 20px;height: 20px">
                                            <?php }else{ ?>
                                            <img src="../gambar/user/<?php echo $profil['user_foto'] ?>" style="width: 20px;height: 20px">
                                            <?php } ?>
                                            <span class="mini-click-non"><?php echo $_SESSION['nama']; ?> [ <b>User</b> ]</span>
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
