<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Data Arsip</h4>
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

<div class="container-fluid">


    <div class="panel">

        <div class="panel-body">

            <form method="get" action="">

                <div class="row">

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Filter Kategori</label>
                            <select class="form-control" name="kategori" required="required">
                                <option value="">Pilih kategori</option>
                                <?php
                                $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                                while ($k = mysqli_fetch_array($kategori)) {
                                    ?>
                                    <option <?php if (isset($_GET['kategori'])) {
                                        if ($_GET['kategori'] == $k['kategori_id']) {
                                            echo "selected='selected'";
                                        }
                                    } ?> value="<?php echo $k['kategori_id']; ?>">
                                        <?php echo $k['kategori_nama']; ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <br>
                        <input type="submit" class="btn btn-sm" style="background-color: #404040; color: white;" value="Tampilkan">
                    </div>

                </div>

            </form>

        </div>

    </div>



    <div class="panel">

        <div class="panel-heading">
            <h3 class="panel-title">Data arsip</h3>
        </div>
        <div class="panel-body">

            <div class="pull-right">
                <a href="https://drive.google.com/drive/folders/1QhQEVbd0pnzZPN0DTUXCKsdcEVwtaDre?usp=sharing" target="_blank" class="btn btn-sm" style="background-color: #404040; color: white;"><i class="fa fa-file-word-o"></i> Template Surat</a>
            </div>
            <div class="pull-right">
                <a href="arsip_tambah.php" class="btn btn-sm" style="background-color: #404040; color: white;"><i class="fa fa-cloud"></i> Unggah Arsip</a>
            </div>

            <br>
            <br>
            <br>

            <div class="responsive-table-wrapper">
            <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th>Waktu Unggah</th>
                        <th>Arsip</th>
                        <th>Kategori</th>
                        <th>Petugas</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th class="text-center" width="20%">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $no = 1;
                    if (isset($_GET['kategori'])) {
                        $kategori = $_GET['kategori'];
                        $arsip = mysqli_query($koneksi, "SELECT * FROM arsip,kategori WHERE arsip_kategori=kategori_id and arsip_kategori='$kategori' ORDER BY arsip_id DESC");
                    } else {
                        $user_id = $_SESSION['id'];
                        $arsip = mysqli_query($koneksi, "SELECT * FROM arsip LEFT JOIN kategori ON arsip.arsip_kategori=kategori.kategori_id LEFT JOIN user ON arsip.arsip_petugas=user.user_id WHERE arsip_user='$user_id' ORDER BY arsip_id DESC");
                    }
                    while ($p = mysqli_fetch_array($arsip)) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo date('H:i:s  d-m-Y', strtotime($p['arsip_waktu_upload'])) ?></td>
                            <td>

                                <b>KODE</b> : <?php echo $p['arsip_kode'] ?><br>
                                <b>Nama</b> : <?php echo $p['arsip_nama'] ?><br>
                                <b>Jenis</b> : <?php echo $p['arsip_jenis'] ?><br>

                            </td>
                            <td><?php echo $p['kategori_nama'] ?></td>
                            <td><?php echo $p['user_nama'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td>
                                <div style="display:flex; justify-content: center;">

                                    <?php if ($p['arsip_tipe'] === "SURAT_KELUAR") { ?>
                                        <i class="fa fa-solid fa-arrow-down" style="color: green;"></i>
                                    <?php } else { ?>
                                        <i class="fa fa-solid fa-arrow-up" style="color: blue;"></i>
                                    <?php } ?>
                                    <?php if ($p['arsip_status'] === "APPROVED") { ?>
                                        <i class="fa fa-solid fa-check"></i>
                                    <?php } elseif ($p['arsip_status'] === "REJECTED") { ?>
                                        <i class="fa fa-solid fa-times"></i>
                                    <?php } else { ?>
                                        <i class="fa fa-solid fa-eye"></i>
                                    <?php } ?>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a class="btn btn-default" href="arsip_download.php?id=<?php echo $p['arsip_id']; ?>"><i class="fa fa-download"></i></a>
                                    <a href="arsip_preview.php?id=<?php echo $p['arsip_id']; ?>"  class="btn btn-default"><i class="fa fa-search"></i> Pratinjau</a>
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            </div>


        </div>

    </div>
</div>


<?php include 'footer.php'; ?>