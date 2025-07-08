<?php include 'header.php'; ?>


<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Ganti Password</span></li>
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
        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
            <div class="panel">

                <div class="panel-body">

                    <?php
                    if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == "sent") {
                            echo "<div class='alert alert-success'>Komentar terkirim</div>";
                        } else if ($_GET['alert'] == "error") {
                            echo "<div class='alert alert-error'>Something went wrong!</div>";
                        }
                    }
                    ?>

                    <?php
                    $komentar = mysqli_query($koneksi, "SELECT * FROM komentar");
                    while ($k = mysqli_fetch_array($komentar)) {
                    ?>

                        <div>
                            <div><?= $k["user_id"] ?></div>
                            <div><?= $k["date"] ?></div>
                            <div><?= $k["content"] ?></div>
                        </div>
                    <?php
                    }
                    ?>

                    <form action="kirim_komentar.php" method="post">
                        <div class="form-group">
                            <label>Content</label>
                            <textarea type="text" class="form-control" placeholder="Apa yang Anda pikirkan..." name="content" required="required" min="5"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Kirim">
                        </div>
                    </form>

                </div>

            </div>
        </div>

    </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php include 'footer.php'; ?>