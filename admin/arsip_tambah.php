<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Upload Arsip</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Beranda</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Arsip</span></li>
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
        <div class="col-lg-12" >
            <a href="arsip.php" class="btn btn-sm btn-kategori"style="color: white !important;"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
    </div>
</div>

<div class="container-fluid">


    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel">
                <!-- <div class="panel-heading">
                    <h3 class="panel-title" style="color: #fff !important;">Upload arsip</h3>
                </div> -->
                <div class="panel-body">
                    <!-- <div class="pull-right">
                        <a href="arsip.php" class="btn btn-sm btn-primary" style="color: white !important;"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div> -->
                    <!-- <br> -->
                    <!-- <br> -->
                    <form method="post" action="arsip_aksi.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Pengguna </label>
                            <select type="text" class="form-control" name="user_id" required="required">
                                <?php
                                $users = mysqli_query($koneksi, "SELECT * FROM user where user_role='petugas'");
                                while ($k = mysqli_fetch_array($users)) {
                                    ?>
                                    <option value="<?php echo $k['user_id']; ?>"><?php echo $k['user_nama']; ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tipe Surat</label>
                            <select class="form-control" name="tipe" required="required" <?php if (isset($_GET["tipe"])) {?>
                                value="<?php echo $_GET["tipe"]; ?>" style="pointer-events: none;"
                                <?php } ?>>
                                <option <?php if (isset($_GET["tipe"]) && $_GET["tipe"] == "SURAT_MASUK") {
                                    echo "selected='selected'";
                                } ?> value="SURAT_MASUK">Surat Masuk</option>
                                <option <?php if (isset($_GET["tipe"]) && $_GET["tipe"] == "SURAT_KELUAR") {
                                    echo "selected='selected'";
                                } ?> value="SURAT_KELUAR">Surat Keluar</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label>Kode Arsip</label>
                            <input type="text" class="form-control" name="kode" required="required">
                        </div>

                        <div class="form-group">
                            <label>Nama Arsip</label>
                            <input type="text" class="form-control" name="nama" required="required">
                        </div>

                        <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control" name="kategori" required="required">
                                <option value="">Pilih kategori</option>
                                <?php
                                $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                                while ($k = mysqli_fetch_array($kategori)) {
                                    ?>
                                    <option value="<?php echo $k['kategori_id']; ?>"><?php echo $k['kategori_nama']; ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea class="form-control" name="keterangan" required="required"></textarea>
                        </div>

                        <div class="form-group">
                            <label>File</label>
                            <input type="file" name="file">
                        </div>

                        <div class="form-group">
                            <label></label>
                            <input type="submit" class="btn btn-primary" style="color: #fff !important;" value="Upload">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


</div>


<?php include 'footer.php'; ?>