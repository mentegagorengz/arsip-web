<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Tambah Pengguna</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Beranda</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Pengguna</span></li>
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
        <div class="col-lg-6">
            <div class="panel panel">

                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Pengguna</h3>
                </div>
                <div class="panel-body">

                    <div class="pull-right">
                        <a href="user.php" class="btn btn-kategori"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                    <br>
                    <br>

                    <form method="post" action="user_aksi.php" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" required="required" />
                        </div>

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" required="required" />
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required="required" />
                        </div>

                        <div class="form-group">
                            <label>Status Pengguna</label>
                            <select type="text" class="form-control" name="role" required="required">
                                <option value="admin">Administrator</option>
                                <option value="petugas">Petugas</option>
                                <option value="user">Pengguna</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="foto" />
                        </div>

                        <div class="form-group">
                            <label></label>
                            <button type="submit" class="btn btn-kategori">
                                Simpan
                            </button>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


</div>


<?php include 'footer.php'; ?>