<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4>Profil Pengguna</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="index.php">Beranda</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Profil</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="profile-info-inner">
                    <div class="profile-img">
                        <img src="../assets/img/product/pro4.jpg" alt="Profile" />
                    </div>
                    <div class="profile-details-hr">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="address-hr">
                                    <h2><?php echo $_SESSION['nama']; ?></h2>
                                    <p><span>Role:</span> <?php echo ucfirst($_SESSION['role']); ?></p>
                                    <p><span>Username:</span> <?php echo $_SESSION['username']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-info">
                                    <h2>Informasi Profile</h2>
                                    <p>Halaman ini menampilkan informasi dasar profile Anda. Untuk mengubah password, silakan gunakan menu Ganti Password.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
