<?php 
include '../koneksi.php';
session_start();
if(!isset($_SESSION['role']) || $_SESSION['role'] != "admin"){
    header("location:../login.php?alert=belum_login");
    exit;
}

// Get current page name
$current_page = basename($_SERVER['PHP_SELF']);
?>
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
    <link rel="manifest" href="manifest.json">

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

        /* Sidebar Toggle Animation */
        #sidebar {
            transition: all 0.3s ease;
            min-width: 200px;
            max-width: 200px;
        }
        #sidebar.active {
            min-width: 80px;
            max-width: 80px;
        }
        .all-content-wrapper {
            margin-left: 200px;
            transition: all 0.3s ease;
        }
        .mini-navbar .all-content-wrapper {
            margin-left: 80px;
        }
        .mini-click-non, .sidebar-text {
            transition: opacity 0.3s ease;
        }
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
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>


    <!-- Sidebar Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Sidebar toggle for desktop
            const sidebarCollapseBtn = document.getElementById('sidebarCollapse');
            const sidebar = document.getElementById('sidebar');
            const contentWrapper = document.querySelector('.all-content-wrapper');
            if (sidebarCollapseBtn) {
                sidebarCollapseBtn.addEventListener('click', function() {
                    document.body.classList.toggle('mini-navbar');
                    sidebar.classList.toggle('active');
                    if (document.body.classList.contains('mini-navbar')) {
                        sidebar.style.minWidth = '80px';
                        sidebar.style.maxWidth = '80px';
                        contentWrapper.style.marginLeft = '80px';
                        const miniTexts = document.querySelectorAll('.mini-click-non');
                        const sidebarTexts = document.querySelectorAll('.sidebar-text');
                        miniTexts.forEach(text => { text.style.display = 'none'; });
                        sidebarTexts.forEach(text => { text.style.display = 'none'; });
                    } else {
                        sidebar.style.minWidth = '200px';
                        sidebar.style.maxWidth = '200px';
                        contentWrapper.style.marginLeft = '200px';
                        const miniTexts = document.querySelectorAll('.mini-click-non');
                        const sidebarTexts = document.querySelectorAll('.sidebar-text');
                        miniTexts.forEach(text => { text.style.display = 'inline'; });
                        sidebarTexts.forEach(text => { text.style.display = 'block'; });
                    }
                });
            }
            // Mobile sidebar toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileSidebar = document.getElementById('mobile-sidebar');
            const closeSidebarButton = document.getElementById('close-mobile-sidebar');
            const sidebarOverlay = document.getElementById('mobile-sidebar-overlay');
            if (mobileMenuButton && mobileSidebar && closeSidebarButton && sidebarOverlay) {
                function openMobileSidebar() {
                    mobileSidebar.style.left = '0';
                    sidebarOverlay.style.display = 'block';
                    document.body.style.overflow = 'hidden';
                }
                function closeMobileSidebar() {
                    mobileSidebar.style.left = '-100%';
                    sidebarOverlay.style.display = 'none';
                    document.body.style.overflow = 'auto';
                }
                mobileMenuButton.addEventListener('click', openMobileSidebar);
                closeSidebarButton.addEventListener('click', closeMobileSidebar);
                sidebarOverlay.addEventListener('click', closeMobileSidebar);
            }
        });
    </script>

</head>

<body>
    <div class="left-sidebar-pro">
        <nav id="sidebar" style="max-width: 2px;">
            <div class="sidebar-header" style="padding-top: 10px; padding-bottom: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1)">
                <a href="index.php" style=" display: block">
                    <div style="display: flex; align-items: center;">
                        <div style="display: flex; justify-content: center; align-items: center;">
                            <img src="../assets/img/logo/logo.png" style="max-height: 120px;" />
                        </div>
                        <div class="sidebar-text" style=" width: 100%; margin-left: 5px;">
                            <div style="padding: 4px; color: black; font-weight: 500; font-size: 14px; text-align: left; white-space: nowrap; overflow: hidden; margin-right: 10px;">Aplikasi Pengarsipan</div>
                            <!-- <div style="padding: 4px;  color: black; font-weight: 550; font-size: 14px; text-align: left;">Pengarsipan</div> -->
                        </div>
                    </div>
                </a>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro" style="margin-top: 30px">

                    <ul class="metismenu" id="menu1">
                        <li class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                            <a href="index.php">
                                <span class="educate-icon educate-home icon-wrap"></span>
                                <span class="mini-click-non">Dasbor</span>
                            </a>
                        </li>

                        <li class="<?php echo ($current_page == 'arsip.php') ? 'active' : ''; ?>">
                            <a href="arsip.php" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Arsip Saya</span></a>
                        </li>
                        <li class="<?php echo ($current_page == 'arsip_masuk.php') ? 'active' : ''; ?>">
                            <a href="arsip_masuk.php" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Dokumen Masuk</span></a>
                        </li>
                        <li class="<?php echo ($current_page == 'arsip_keluar.php') ? 'active' : ''; ?>">
                            <a href="arsip_keluar.php" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Dokumen Keluar</span></a>
                        </li>

                        <li class="<?php echo ($current_page == 'kategori.php') ? 'active' : ''; ?>">
                            <a href="kategori.php" aria-expanded="false"><span class="educate-icon educate-course icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Kategori</span></a>
                        </li>

                        <li class="<?php echo ($current_page == 'user.php') ? 'active' : ''; ?>">
                            <a href="user.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Pengguna</span></a>
                        </li>

                        <li class="<?php echo ($current_page == 'riwayat.php') ? 'active' : ''; ?>">
                            <a href="riwayat.php" aria-expanded="false"><span class="educate-icon educate-form icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Riwayat Unduh</span></a>
                        </li>


                        <li class="<?php echo ($current_page == 'gantipassword.php') ? 'active' : ''; ?>">
                            <a href="gantipassword.php" aria-expanded="false"><span class="educate-icon educate-danger icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Ganti Password</span></a>
                        </li>

                        <li>
                            <a href="logout.php" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Keluar</span></a>
                        </li>

                    </ul>
                </nav>
            </div>
        </nav>
    </div>

    <!-- Script untuk Sidebar Toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fungsi untuk toggle sidebar
            const sidebarCollapseBtn = document.getElementById('sidebarCollapse');
            const sidebar = document.getElementById('sidebar');
            const contentWrapper = document.querySelector('.all-content-wrapper');
            
            if (sidebarCollapseBtn) {
                sidebarCollapseBtn.addEventListener('click', function() {
                    // Toggle class untuk mini sidebar
                    document.body.classList.toggle('mini-navbar');
                    sidebar.classList.toggle('active');
                    
                    // Animasi smooth
                    if (document.body.classList.contains('mini-navbar')) {
                        sidebar.style.minWidth = '80px';
                        sidebar.style.maxWidth = '80px';
                        contentWrapper.style.marginLeft = '80px';
                        
                        // Hide text in mini mode
                        const miniTexts = document.querySelectorAll('.mini-click-non');
                        const sidebarTexts = document.querySelectorAll('.sidebar-text');
                        
                        miniTexts.forEach(text => {
                            text.style.display = 'none';
                        });
                        
                        sidebarTexts.forEach(text => {
                            text.style.display = 'none';
                        });
                        
                    } else {
                        sidebar.style.minWidth = '200px';
                        sidebar.style.maxWidth = '200px';
                        contentWrapper.style.marginLeft = '200px';
                        
                        // Show text in normal mode
                        const miniTexts = document.querySelectorAll('.mini-click-non');
                        const sidebarTexts = document.querySelectorAll('.sidebar-text');
                        
                        miniTexts.forEach(text => {
                            text.style.display = 'inline';
                        });
                        
                        sidebarTexts.forEach(text => {
                            text.style.display = 'block';
                        });
                    }
                });
            }
        });
    </script>

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
                                                <!-- <li class="nav-item">
                                                    <a href="#" class="nav-link" style="color: white; font-size: 18px; font-weight: 600; text-decoration: none; padding: 15px 0; padding-left: 5px; display: flex; align-items: center; height: 50px;">
                                                        Aplikasi Pengarsipan
                                                    </a>
                                                </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item" style="display: flex; align-items: center; gap: 10px;">
                                                    <!-- Notifikasi Icon Desktop -->
                                                    <div style="position: relative;">
                                                        <button id="desktop-notif-btn" style="background: none; border: none; color: white; position: relative; padding: 0;">
                                                            <i class="educate-icon educate-bell" style="font-size: 22px;"></i>
                                                            <span class="indicator-nt" style="background-color: #fff; position: absolute; top: -2px; right: -2px; width: 8px; height: 8px; border-radius: 50%; display: inline-block;"></span>
                                                        </button>
                                                        <!-- Popup Notifikasi Desktop -->
                                                        <div id="desktop-notif-popup" style="display: none; position: absolute; right: 0; top: 32px; width: 340px; max-width: 95vw; background: #fff; color: #333; box-shadow: 0 4px 16px rgba(0,0,0,0.18); border-radius: 8px; z-index: 2000;">
                                                            <div style="padding: 12px 16px; border-bottom: 1px solid #eee; background: #d80027; color: #fff; border-radius: 8px 8px 0 0; font-weight: 600;">Notifikasi</div>
                                                            <div style="max-height: 220px; overflow-y: auto; padding: 10px 0;">
                                                                <ul style="list-style: none; padding: 0 16px; margin: 0;">
                                                                <?php 
                                                                $arsip = mysqli_query($koneksi,"SELECT * FROM riwayat,arsip,user WHERE riwayat_arsip=arsip_id and riwayat_user=user_id ORDER BY riwayat_id DESC LIMIT 5");
                                                                if(mysqli_num_rows($arsip) > 0){
                                                                    while($p = mysqli_fetch_array($arsip)){
                                                                ?>
                                                                    <li style="margin-bottom: 10px;">
                                                                        <a href="riwayat.php" style="text-decoration: none; color: #333;">
                                                                            <div style="font-size: 13px;">
                                                                                <small><i><?php echo date('H:i:s d-m-Y',strtotime($p['riwayat_waktu'])) ?></i></small><br>
                                                                                <b><?php echo $p['user_nama'] ?></b> mengunduh <b><?php echo $p['arsip_nama'] ?></b>.
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                <?php }}else{ ?>
                                                                    <li><span style="font-size: 13px; color: #888;">Tidak ada notifikasi.</span></li>
                                                                <?php } ?>
                                                                </ul>
                                                            </div>
                                                            <div style="padding: 8px 16px; border-top: 1px solid #eee; text-align: right;">
                                                                <a href="riwayat.php" style="font-size: 13px; color: #d80027; text-decoration: underline;">Lihat Semua</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Profile Desktop -->
                                                    <a href="profil.php" class="nav-link" style="color: white; text-decoration: none;">
                                                        <?php 
                                                        $id_admin = $_SESSION['id'];
                                                        $profil = mysqli_query($koneksi,"select * from user where user_id='$id_admin'");
                                                        $profil = mysqli_fetch_assoc($profil);
                                                        if($profil['user_foto'] == ""){ 
                                                            ?>
                                                            <img src="../gambar/sistem/user.png" style="width: 25px; height: 25px; border-radius: 50%; margin-right: 0; vertical-align: middle;">
                                                        <?php }else{ ?>
                                                        <img src="../gambar/user/<?php echo $profil['user_foto'] ?>" style="width: 25px; height: 25px; border-radius: 50%; margin-right: 0; vertical-align: middle;">
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
        <div class="container-fluid" style="padding: 10px 15px;">
            <div style="display: flex; align-items: center; justify-content: space-between; margin: 0;">
                <div class="col-auto">
                    <button id="mobile-menu-button" type="button" class="btn p-0" 
                            style="background: none; border: none; color: white;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" 
                            stroke="currentColor" stroke-width="2">
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <div class="col text-center">
                    <h5 style="color: white; margin: 0; font-weight: 500; font-size: 18px;">
                            Aplikasi Pengarsipan
                    </h5>
                </div>
                <div class="col-auto" style="display: flex; align-items: center; gap: 10px;">
                    <!-- Notifikasi Icon Mobile -->
                    <div style="position: relative;">
                        <button id="mobile-notif-btn" style="background: none; border: none; color: white; position: relative; padding: 0;">
                            <i class="educate-icon educate-bell" style="font-size: 22px;"></i>
                            <span class="indicator-nt" style="background-color: #fff; position: absolute; top: -2px; right: -2px; width: 8px; height: 8px; border-radius: 50%; display: inline-block;"></span>
                        </button>
                        <!-- Popup Notifikasi Mobile -->
                        <div id="mobile-notif-popup" style="display: none; position: absolute; right: 0; top: 32px; width: 320px; max-width: 90vw; background: #fff; color: #333; box-shadow: 0 4px 16px rgba(0,0,0,0.18); border-radius: 8px; z-index: 2000;">
                            <div style="padding: 12px 16px; border-bottom: 1px solid #eee; background: #d80027; color: #fff; border-radius: 8px 8px 0 0; font-weight: 600;">Notifikasi</div>
                            <div style="max-height: 220px; overflow-y: auto; padding: 10px 0;">
                                <ul style="list-style: none; padding: 0 16px; margin: 0;">
                                <?php 
                                $arsip = mysqli_query($koneksi,"SELECT * FROM riwayat,arsip,user WHERE riwayat_arsip=arsip_id and riwayat_user=user_id ORDER BY riwayat_id DESC LIMIT 5");
                                if(mysqli_num_rows($arsip) > 0){
                                    while($p = mysqli_fetch_array($arsip)){
                                ?>
                                    <li style="margin-bottom: 10px;">
                                        <a href="riwayat.php" style="text-decoration: none; color: #333;">
                                            <div style="font-size: 13px;">
                                                <small><i><?php echo date('H:i:s d-m-Y',strtotime($p['riwayat_waktu'])) ?></i></small><br>
                                                <b><?php echo $p['user_nama'] ?></b> menunduh <b><?php echo $p['arsip_nama'] ?></b>.
                                            </div>
                                        </a>
                                    </li>
                                <?php }}else{ ?>
                                    <li><span style="font-size: 13px; color: #888;">Tidak ada notifikasi.</span></li>
                                <?php } ?>
                                </ul>
                            </div>
                            <div style="padding: 8px 16px; border-top: 1px solid #eee; text-align: right;">
                                <a href="riwayat.php" style="font-size: 13px; color: #d80027; text-decoration: underline;">Lihat Semua</a>
                            </div>
                        </div>
                    </div>
                    <!-- Profile Mobile -->
                    <a href="profil.php" style="color: white; text-decoration: none;">
                        <?php 
                            $id_admin = $_SESSION['id'];
                            $profil = mysqli_query($koneksi,"select * from user where user_id='$id_admin'");
                            $profil = mysqli_fetch_assoc($profil);
                            if($profil['user_foto'] == ""){ 
                        ?>
                            <img src="../gambar/sistem/user.png" style="width: 25px; height: 25px; border-radius: 50%; margin-right: 0; vertical-align: middle;">
                        <?php }else{ ?>
                            <img src="../gambar/user/<?php echo $profil['user_foto'] ?>" style="width: 25px; height: 25px; border-radius: 50%; margin-right: 0; vertical-align: middle;">
                        <?php } ?>
                    </a>
                </div>
            </div>
        </div>


        <!-- Mobile Sidebar -->
        <div id="mobile-sidebar" style="position: fixed; top: 0; left: -100%; width: 280px; height: 100vh; background: white; z-index: 1000; transition: left 0.3s ease; box-shadow: 2px 0 10px rgba(0,0,0,0.3);">
            <div style="background: #d80027; color: white; padding: 20px; display: flex; justify-content: space-between; align-items: center;">
                <h5 style="margin: 0;">Menu</h5>
                <button id="close-mobile-sidebar" style="background: none; border: none; color: white; font-size: 24px; cursor: pointer;">&times;</button>
            </div>
            <nav style="padding: 15px 0;">
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li>
                        <a href="index.php" style="display: block; padding: 15px 20px; text-decoration: none; color: #333; border-bottom: 1px solid #eee;">
                            <i class="educate-icon educate-home" style="margin-right: 15px; color: #666;"></i>
                            Dasbor
                        </a>
                    </li>
                    <li>
                        <a href="arsip.php" style="display: block; padding: 15px 20px; text-decoration: none; color: #333; border-bottom: 1px solid #eee;">
                            <i class="educate-icon educate-data-table" style="margin-right: 15px; color: #666;"></i>
                            Arsip Saya
                        </a>
                    </li>
                    <li>
                        <a href="arsip_masuk.php" style="display: block; padding: 15px 20px; text-decoration: none; color: #333; border-bottom: 1px solid #eee;">
                            <i class="educate-icon educate-data-table" style="margin-right: 15px; color: #666;"></i>
                            Dokumen Masuk
                        </a>
                    </li>
                    <li>
                        <a href="arsip_keluar.php" style="display: block; padding: 15px 20px; text-decoration: none; color: #333; border-bottom: 1px solid #eee;">
                            <i class="educate-icon educate-data-table" style="margin-right: 15px; color: #666;"></i>
                            Dokumen Keluar
                        </a>
                    </li>
                    <li>
                        <a href="kategori.php" style="display: block; padding: 15px 20px; text-decoration: none; color: #333; border-bottom: 1px solid #eee;">
                            <i class="educate-icon educate-course" style="margin-right: 15px; color: #666;"></i>
                            Data Kategori
                        </a>
                    </li>
                    <li>
                        <a href="user.php" style="display: block; padding: 15px 20px; text-decoration: none; color: #333; border-bottom: 1px solid #eee;">
                            <i class="educate-icon educate-professor" style="margin-right: 15px; color: #666;"></i>
                            Data Pengguna
                        </a>
                    </li>
                    <li>
                        <a href="riwayat.php" style="display: block; padding: 15px 20px; text-decoration: none; color: #333; border-bottom: 1px solid #eee;">
                            <i class="educate-icon educate-form" style="margin-right: 15px; color: #666;"></i>
                            Riwayat Unduh
                        </a>
                    </li>
                    <li>
                        <a href="gantipassword.php" style="display: block; padding: 15px 20px; text-decoration: none; color: #333; border-bottom: 1px solid #eee;">
                            <i class="educate-icon educate-danger" style="margin-right: 15px; color: #666;"></i>
                            Ganti Password
                        </a>
                    </li>
                    <!-- <li>
                        <a href="profil.php" style="display: block; padding: 15px 20px; text-decoration: none; color: #333; border-bottom: 1px solid #eee;">
                            <i class="educate-icon educate-professor" style="margin-right: 15px; color: #666;"></i>
                            Profil
                        </a>
                    </li> -->
                    <li>
                        <a href="logout.php" style="display: block; padding: 15px 20px; text-decoration: none; color: #333;">
                            <i class="educate-icon educate-pages" style="margin-right: 15px; color: #666;"></i>
                            Keluar
                        </a>
                    </li>
                </ul>
            </nav>
        </div>


        <!-- Mobile Overlay -->
        <div id="mobile-sidebar-overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 999;"></div>
    </div>

    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Desktop notif
        const desktopNotifBtn = document.getElementById('desktop-notif-btn');
        const desktopNotifPopup = document.getElementById('desktop-notif-popup');
        let desktopNotifOpen = false;
        if(desktopNotifBtn && desktopNotifPopup){
            desktopNotifBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                desktopNotifOpen = !desktopNotifOpen;
                desktopNotifPopup.style.display = desktopNotifOpen ? 'block' : 'none';
            });
            document.addEventListener('click', function(e) {
                if (desktopNotifOpen && !desktopNotifPopup.contains(e.target) && e.target !== desktopNotifBtn) {
                    desktopNotifPopup.style.display = 'none';
                    desktopNotifOpen = false;
                }
            });
        }
        // Mobile notif
        const mobileNotifBtn = document.getElementById('mobile-notif-btn');
        const mobileNotifPopup = document.getElementById('mobile-notif-popup');
        let mobileNotifOpen = false;
        if(mobileNotifBtn && mobileNotifPopup){
            mobileNotifBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                mobileNotifOpen = !mobileNotifOpen;
                mobileNotifPopup.style.display = mobileNotifOpen ? 'block' : 'none';
            });
            document.addEventListener('click', function(e) {
                if (mobileNotifOpen && !mobileNotifPopup.contains(e.target) && e.target !== mobileNotifBtn) {
                    mobileNotifPopup.style.display = 'none';
                    mobileNotifOpen = false;
                }
            });
        }
    });
    </script>