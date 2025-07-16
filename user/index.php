<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Dasbor</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Beranda</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Dasbor</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <a href="arsip.php">
                            <div class="white-box analytics-info-cs res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                                <h3 class="box-title">Total Arsip</h3>
                                <ul class="list-inline two-part-sp">
                                    <li>
                                        <div id="sparklinedash3"></div>
                                    </li>
                                    <li class="text-right graph-three-ctn">
                                        <i class="fa fa-level-up" aria-hidden="true"></i>
                                        <span class="counter text-info">
                                            <?php
                                            $jumlah_arsip = mysqli_query($koneksi, "select * from arsip");
                                            ?>
                                            <span class="counter"><?php echo mysqli_num_rows($jumlah_arsip); ?></span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <a href="arsip.php">
                            <div class="white-box analytics-info-cs res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                                <h3 class="box-title">Kategori Arsip</h3>
                                <ul class="list-inline two-part-sp">
                                    <li>
                                        <div id="sparklinedash4"></div>
                                    </li>
                                    <li class="text-right graph-four-ctn">
                                        <i class="fa fa-level-down" aria-hidden="true"></i>
                                        <span class="text-danger">
                                            <?php
                                            $jumlah_kategori = mysqli_query($koneksi, "select * from kategori");
                                            ?>
                                            <span
                                                class="counter"><?php echo mysqli_num_rows($jumlah_kategori); ?></span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <div class="product-sales-chart" style="margin-bottom: 10px;">
                    <br>
                    <br>
                    <center>
                        <h3 style="margin-bottom: 10px;">Selamat Datang</h3>
                        <h4 style="margin-bottom: 30px;">Aplikasi Pengarsipan</h4>
                    </center>
                    <br>
                    <br>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="paddiing-bottom: 200px;">
                <div class="profile-card" style="margin-top: 40px;">
                    <?php 
                    $id = $_SESSION['id'];
                    $saya = mysqli_query($koneksi,"select * from user where user_id='$id'");
                    $s = mysqli_fetch_assoc($saya);
                    ?>
                    <div class="profile-image">
                        <?php if ($s['user_foto'] == ""): ?>
                            <img src="../gambar/sistem/user.png" alt="Profil Default">
                        <?php else: ?>
                            <img src="../gambar/user/<?php echo $s['user_foto']; ?>" alt="Profil Pengguna">
                        <?php endif; ?>
                    </div>
                    <div class="profile-info">
                        <h4><?php echo htmlspecialchars($s['user_nama']); ?></h4>
                        <div class="profile-role">Pengguna</div>
                        <p class="profile-desc">Pengelolaan arsip jadi lebih mudah dengan Aplikasi Arsip.</p>
                        <!-- <div class="profile-status">
                            <span class="status-dot"></span>
                            <span class="status-text">Online</span>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    
img {
    max-width:100%;
    height:auto;
}

.profile-card {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 2px 15px rgba(0,0,0,0.08);
    padding: 25px;
    text-align: center;
}


.profile-image {
    width: 120px;
    height: 120px;
    margin: 0 auto 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: #f8f9fa;
    padding: 3px;
}

.profile-image img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
    display: block;
}

.profile-info h4 {
    color: #333;
    margin-bottom: 5px;
    font-weight: 600;
}

.profile-role {
    color: #666;
    font-size: 14px;
    margin-bottom: 12px;
}

.profile-desc {
    color: #777;
    font-size: 13px;
    line-height: 1.5;
    margin: 15px 0;
}

.profile-status {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 5px;
    margin-top: 15px;
    padding-top: 15px;
    border-top: 1px solid #eee;
}

.status-dot {
    width: 8px;
    height: 8px;
    background: #28a745;
    border-radius: 50%;
}

.status-text {
    color: #28a745;
    font-size: 13px;
}

@media (max-width: 600px) {
    .product-sales-area {
        padding-bottom: 80px; /* beri ruang untuk footer */
    }
    footer, .footer {
        position: relative !important;
    }
}
</style>

<?php include 'footer.php'; ?>