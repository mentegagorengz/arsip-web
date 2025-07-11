<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Profil</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Profil</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Button Kembali -->
<div class="container-fluid" style="margin-bottom: 20px;">
    <div class="row">
        <div class="col-lg-12">
            <a href="arsip.php" class="btn btn-sm btn-kategori"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
    </div>
</div>

<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <?php 
                $id = $_SESSION['id'];
                $saya = mysqli_query($koneksi,"select * from user where user_id='$id'");
                $s = mysqli_fetch_assoc($saya);
                ?>
                <div class="single-cards-item">
                    
                    <div class="profile-card">
                    <?php 
                    $id = $_SESSION['id'];
                    $saya = mysqli_query($koneksi,"select * from user where user_id='$id'");
                    $s = mysqli_fetch_assoc($saya);
                    ?>
                    <div class="profile-image">
                        <?php if ($s['user_foto'] == ""): ?>
                            <img src="../gambar/sistem/user.png" alt="Default Profile">
                        <?php else: ?>
                            <img src="../gambar/user/<?php echo $s['user_foto']; ?>" alt="User Profile">
                        <?php endif; ?>
                    </div>
                    <div class="profile-info">
                        <h4><?php echo htmlspecialchars($s['user_nama']); ?></h4>
                        <div class="profile-role">Admin</div>
                        <p class="profile-desc">Pengelolaan arsip jadi lebih mudah dengan Aplikasi Arsip.</p>
                        <!-- <div class="profile-status">
                            <span class="status-dot"></span>
                            <span class="status-text">Online</span>
                        </div> -->
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-6">
                <?php 
                if(isset($_GET['alert'])){
                    if($_GET['alert'] == "sukses"){
                        echo "<div class='alert alert-success'>Password anda berhasil diganti!</div>";
                    }
                }
                ?>
                <div class="panel">
                    <div class="panel-heading">
                        <h4>Data Diri</h4>
                    </div>
                    <div class="panel-body">
                        
                        <form action="profil_act.php" method="post" enctype="multipart/form-data">
                            
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama .." name="nama" required="required" value="<?php echo $s['user_nama'] ?>">
                            </div>

                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" placeholder="Masukkan Username .." name="username" required="required" value="<?php echo $s['user_username'] ?>">
                            </div>

                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" name="foto">
                                <small>Kosongkan jika tidak ingin mengubah foto.</small>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Simpan">
                            </div>

                        </form>

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
</style>


<?php include 'footer.php'; ?>