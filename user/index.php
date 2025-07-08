<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Dashboard</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Dashboard</span></li>
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

                <div class="product-sales-chart">

                    <br>
                    <br>
                    <center>

                        <h3>Selamat Datang</h3>
                        <h4>Aplikasi Pengarsipan</h4>

                    </center>
                    <br>
                    <br>
                    <br>

                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <?php
                $id = $_SESSION['id'];
                $saya = mysqli_query($koneksi, "SELECT * FROM user WHERE user_id='$id'");
                $s = mysqli_fetch_assoc($saya);
                ?>
                <div class="single-cards-item">
                    <div class="single-product-image">
                        <?php
                        if ($s['user_foto'] == "") {
                            ?>
                            <img class="img-user" src="../gambar/sistem/user.png" alt="Foto Profile Default">
                            <?php
                        } else {
                            ?>
                            <img class="img-user" src="../gambar/user/<?php echo $s['user_foto']; ?>" alt="Foto Profile <?php echo htmlspecialchars($s['user_nama']); ?>">
                            <?php
                        }
                        ?>
                    </div>
                    
                    <div class="single-product-text">
                        <h4><a class="cards-hd-dn" href="profile.php"><?php echo htmlspecialchars($s['user_nama']); ?></a></h4>
                        <h5 class="user-role">Pengguna</h5>
                        <p class="ctn-cards">Pengelolaan arsip jadi lebih mudah dengan Aplikasi Pengarsipan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.single-cards-item {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    padding: 20px;
    text-align: center;
    margin-bottom: 20px;
}

.single-product-image {
    margin-bottom: 15px;
}

.img-user {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid #f0f0f0;
}

.user-role {
    color: #666;
    font-weight: normal;
    margin: 5px 0;
}

.user-stats {
    margin-top: 15px;
    padding-top: 15px;
    border-top: 1px solid #eee;
}
</style>

<?php include 'footer.php'; ?>