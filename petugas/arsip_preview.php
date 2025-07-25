<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Pratinjau Arsip</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Beranda</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Pratinjau</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel">

                <div class="panel-heading">
                    <h3 class="panel-title">Pratinjau Arsip</h3>
                </div>
                <div class="panel-body">

                    <a href="arsip.php" class="btn btn-sm" style="background-color: #8B5C2A; color: white;"><i class="fa fa-arrow-left"></i> Kembali</a>

                    <br>
                    <br>

                    <?php 
                    $id = $_GET['id'];  
                    $data = mysqli_query($koneksi,"SELECT a.*, k.kategori_nama, u.user_nama FROM `arsip` a INNER JOIN `user` u ON a.arsip_user = u.user_id INNER JOIN `kategori` k ON a.arsip_kategori = k.kategori_id WHERE a.arsip_id='$id';");
                    while($d = mysqli_fetch_array($data)){
                        ?>

                        <div class="row">
                            <div class="col-lg-4">

                                <div class="responsive-table-wrapper">
                                <table class="table">
                                    <tr>
                                        <th>Kode Arsip</th>
                                        <td><?php echo $d['arsip_kode']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Waktu Unggah</th>
                                        <td><?php echo date('H:i:s  d-m-Y',strtotime($d['arsip_waktu_upload'])) ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama File</th>
                                        <td><?php echo $d['arsip_nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kategori</th>
                                        <td><?php echo $d['kategori_nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis File</th>
                                        <td><?php echo $d['arsip_jenis']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Petugas Pengunggah</th>
                                        <td><?php echo $d['user_nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Keterangan</th>
                                        <td><?php echo $d['arsip_keterangan']; ?></td>
                                    </tr>
                                </table>
                                </div>

                            </div>
                            <div class="col-lg-8">

                                <?php 
                                if($d['arsip_jenis'] == "png" || $d['arsip_jenis'] == "jpg" || $d['arsip_jenis'] == "gif" || $d['arsip_jenis'] == "jpeg"){
                                    ?>
                                    <img src="../arsip/<?php echo $d['arsip_file']; ?>" class="img-responsive">
                                    
                                    <?php
                                }elseif($d['arsip_jenis'] == "pdf"){
                                    ?>

                                    <div class="pdf-singe-pro">
                                        <iframe src="../arsip/<?php echo $d['arsip_file']; ?>" width="100%" height="600px" frameborder="0"></iframe>
                                        <br><br>
                                        <a href="../arsip/<?php echo $d['arsip_file']; ?>" class="btn btn-sm" style="background-color: #8B5C2A; color: white;" target="_blank">
                                            <i class="fa fa-external-link"></i> Buka di Tab Baru
                                        </a>
                                    </div>

                                    <?php
                                }else{
                                    ?>
                                    <p>Pratinjau tidak tersedia, silahkan <a target="_blank" style="color: blue" href="../arsip/<?php echo $d['arsip_file']; ?>">Unduh di sini.</a></p>.
                                    <?php
                                }
                                ?>

                            </div>
                        </div>







                        <?php 
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>


</div>



<?php include 'footer.php'; ?>