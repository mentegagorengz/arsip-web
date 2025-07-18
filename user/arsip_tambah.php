<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Unggah Arsip</h4>
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
        <div class="col-lg-12 style">
            <a href="arsip.php" class="btn btn-sm" style="background-color: #404040; color: white;"><i class="fa fa-arrow-left" style="color: white !important;"></i> Kembali</a>
        </div>
    </div>
</div>

<div class="container-fluid" style="margin-top: 20px; margin-bottom: 20px;">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel">

                <div class="panel-heading">
                    <h3 class="panel-title">Unggah arsip</h3>
                </div>
                <div class="panel-body">

                    <form method="post" action="arsip_aksi.php" enctype="multipart/form-data">

                      
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
                            <label>Petugas</label>
                            <select class="form-control" name="petugas" required="required">
                                <option value="">Pilih Petugas</option>
                                <?php
                                $petugas = mysqli_query($koneksi, "SELECT * FROM user WHERE user_role='petugas'");
                                while ($p = mysqli_fetch_array($petugas)) {
                                ?>
                                    <option value="<?php echo $p['user_id']; ?>"><?php echo $p['user_nama']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tipe Surat</label>
                            <select class="form-control" name="tipe" required="required">
                                <option value="SURAT_MASUK">Surat Masuk</option>
                                <option value="SURAT_KELUAR">Surat Keluar</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea class="form-control" name="keterangan" required="required"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Berkas</label>
                            <input type="file" name="file">
                        </div>

                        <div class="form-group">
                            <label></label>
                            <input type="submit" class="btn btn-sm" style="background-color: #404040; color: white;" value="Unggah">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>