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
    <div class="panel panel">

        <div class="panel-heading">
            <h3 class="panel-title">Semua Arsip</h3>
        </div>
        <div class="panel-body">

        <div class="pull-right">
                <a href="arsip_tambah.php" class="btn btn-primary" style="color: white !important;"><i class="fa fa-cloud"></i> Unggah Arsip</a>
            </div>

            <br>
            <br>
            <br>

            <center>
                <?php 
                if(isset($_GET['alert'])){
                    if($_GET['alert'] == "gagal"){
                        ?>
                        <div class="alert alert-danger">File arsip gagal diunggah. Karena demi keamanan file .php tidak diperbolehkan.</div>
                        <?php
                    }else{
                        ?>
                        <div class="alert alert-success">Arsip berhasil tersimpan.</div>
                        <?php
                    }
                }
                ?>
            </center>
            
            <div class="table-responsive">
                <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>Waktu Unggah</th>
                            <th>Arsip</th>
                            <th>Kategori</th>
                            <th>Pengirim</th>
                            <th>Petugas</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th class="text-center" width="20%">OPSI</th>
                        </tr>
                    <!-- ...existing code... -->
                    </thead>
                    <tbody>
                        <?php 
                        include '../koneksi.php';
                        $no = 1;
                        $arsip = mysqli_query($koneksi,"SELECT arsip.*, kategori.kategori_nama, user.user_nama as petugas_nama, user_pengirim.user_nama as pengirim_nama FROM arsip LEFT JOIN kategori ON arsip.arsip_kategori=kategori.kategori_id LEFT JOIN user ON arsip.arsip_petugas=user.user_id LEFT JOIN user AS user_pengirim ON arsip.arsip_user=user_pengirim.user_id ORDER BY arsip_id DESC");
                        while($p = mysqli_fetch_array($arsip)){
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo date('H:i:s  d-m-Y',strtotime($p['arsip_waktu_upload'])) ?></td>
                                <td>
                                    <b>KODE</b> : <?php echo $p['arsip_kode'] ?><br>
                                    <b>Nama</b> : <?php echo $p['arsip_nama'] ?><br>
                                    <b>Jenis</b> : <?php echo $p['arsip_jenis'] ?><br>
                                </td>
                                <td><?php echo $p['kategori_nama'] ?></td>
                                <td><?php echo $p['pengirim_nama'] ? $p['pengirim_nama'] : 'N/A' ?></td>
                                <td><?php echo $p['petugas_nama'] ? $p['petugas_nama'] : 'N/A' ?></td>
                                <td><?php echo $p['arsip_keterangan'] ?></td>
                                <td>
                                    <div style="display:flex; justify-content: center;">
                                    <?php if ($p['arsip_tipe'] === "SURAT_MASUK"){?>
                                        <i class="fa fa-solid fa-arrow-down" style="color: green;"></i>
                                    <?php } else {?>
                                        <i class="fa fa-solid fa-arrow-up"  style="color: blue;"></i>
                                    <?php }?>
                                    <?php if ($p['arsip_status'] === "APPROVED"){?>
                                        <i class="fa fa-solid fa-check"></i>
                                    <?php } elseif ($p['arsip_status'] === "REJECTED") { ?>
                                        <i class="fa fa-solid fa-times"></i>
                                    <?php } else {?>
                                        <i class="fa fa-solid fa-eye"></i>
                                    <?php }?>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="modal fade" id="exampleModal_<?php echo $p['arsip_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">PERINGATAN!</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah anda yakin ingin menghapus data ini? <br>file dan semua yang berhubungan akan dihapus secara permanen.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                                    <a href="arsip_hapus.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-primary"><i class="fa fa-check"></i> &nbsp; Ya, hapus</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn btn-default" href="arsip_process.php?status=APPROVED&id=<?php echo $p['arsip_id']; ?>"><i class="fa fa-check"></i></a>
                                        <a class="btn btn-default" href="arsip_process.php?status=REJECTED&id=<?php echo $p['arsip_id']; ?>"><i class="fa fa-times"></i></a>
                                        <a  class="btn btn-default" href="../arsip/<?php echo $p['arsip_file']; ?>" title="Unduh"><i style="color:#000" class="fa fa-download"></i></a>
                                        <a  href="arsip_preview.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-default"><i style="color:#000" class="fa fa-search"></i></a>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_<?php echo $p['arsip_id']; ?>">
                                            <i class="fa fa-trash"></i>
                                        </button>
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