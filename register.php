<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Buat Akun | Aplikasi Pengarsipan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/morrisjs/morris.css">
    <link rel="stylesheet" href="assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="assets/css/metisMenu/metisMenu-vertical.css">
    <link rel="stylesheet" href="assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="assets/css/calendar/fullcalendar.print.min.css">
    <link rel="stylesheet" href="assets/css/form/all-type-forms.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="text-center m-b-md custom-login">
                <p class="text-white bg-dark"></p>
            </div>
            <div class="content-error .bg-danger">
                <?php 
                // pesan notifikasi
                if(isset($_GET['alert'])){
                    if($_GET['alert'] == "sukses"){
                        echo "<div class='alert alert-success'>AKUN BERHASIL DIBUAT! SILAHKAN LOGIN.</div>";
                    }else if($_GET['alert'] == "gagal"){
                        echo "<div class='alert alert-danger'>GAGAL MEMBUAT AKUN! COBA LAGI.</div>";
                    }else if($_GET['alert'] == "username_ada"){
                        echo "<div class='alert alert-warning'>USERNAME SUDAH DIGUNAKAN!</div>";
                    }else if($_GET['alert'] == "password_tidak_sama"){
                        echo "<div class='alert alert-warning'>KONFIRMASI PASSWORD TIDAK SAMA!</div>";
                    }else if($_GET['alert'] == "foto_error"){
                        echo "<div class='alert alert-warning'>FORMAT FOTO TIDAK VALID! Gunakan format: gif, png, jpg, jpeg</div>";
                    }
                }
                ?>
                <div style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); padding: 20px; border-radius: 10px; color: #fff; box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);">
                    <br>
                    <br>
                    <center>
                        <div style="color:#fff" class="login-logo">
                            <img style="margin-top:-12px" src="assets/img/Logo.png" alt="Logo" height="50"> <b>Elektronik Arsip</b>
                        </div>
                        <div style="color:#fff" class="login1">
                            <h4>BUAT AKUN</h4>
                        </div>
                    </center>
                    <br>
                    <br>

                    <form action="proses_register.php" method="POST" id="registerForm" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" placeholder="Nama Lengkap" title="Please enter your full name" required="required" autocomplete="off" name="nama" id="nama" class="form-login">
                            <div class="icon"><i style="color:#fff" class="bx bx-user"></i></div>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Username" title="Please enter your username" required="required" autocomplete="off" name="username" id="username" class="form-login">
                            <div class="icon"><i style="color:#fff" class="bx bx-user-circle"></i></div>
                        </div>
                        <div class="form-group">
                            <input type="password" title="Please enter your password" placeholder="Password" required="required" autocomplete="off" name="password" id="password" class="form-login">
                            <div class="icon"><i style="color:#fff" class="bx bx-lock"></i></div>
                        </div>
                        <div class="form-group">
                            <input type="password" title="Please confirm your password" placeholder="Konfirmasi Password" required="required" autocomplete="off" name="konfirmasi_password" id="konfirmasi_password" class="form-login">
                            <div class="icon"><i style="color:#fff" class="bx bx-lock-alt"></i></div>
                        </div>
                        
                        <div class="form-group">
                            <label style="color:#fff; font-size: 14px; margin-bottom: 10px; display: block;">Foto Profil (Opsional)</label>
                            <div class="file-upload-wrapper">
                                <div class="file-upload-area" id="fileUploadArea">
                                    <div class="file-upload-content">
                                        <i class="bx bx-cloud-upload" style="font-size: 48px; color: #fff; margin-bottom: 10px;"></i>
                                        <p style="color: #fff; margin-bottom: 10px;">Drag & Drop gambar atau klik untuk upload</p>
                                        <p style="color: #ccc; font-size: 12px;">Format: JPG, PNG, GIF (Max: 5MB)</p>
                                    </div>
                                    <input type="file" name="foto" id="foto" class="file-input" accept="image/*">
                                </div>
                                <div class="image-preview" id="imagePreview" style="display: none;">
                                    <img id="previewImg" src="" alt="Preview" style="max-width: 100%; max-height: 200px; border-radius: 8px;">
                                    <button type="button" class="remove-image" id="removeImage">
                                        <i class="bx bx-x"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <input type="submit" class="btn btn-success btn-block loginbtn" value="Buat Akun">
                    </form>

                    <br>
                    <div class="text-center">
                        <a href="login.php" style="color: #fff; text-decoration: none;">
                            <i class="bx bx-left-arrow-alt"></i> Kembali ke Login
                        </a>
                    </div>
                    <br>
                </div>

                <a href="index.php">Kembali</a>
            </div>
        </div>   
    </div>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery-price-slider.js"></script>
    <script src="assets/js/jquery.meanmenu.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <script src="assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="assets/js/metisMenu/metisMenu-active.js"></script>
    <script src="assets/js/tab.js"></script>
    <script src="assets/js/icheck/icheck.min.js"></script>
    <script src="assets/js/icheck/icheck-active.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    
    <style>
        .file-upload-wrapper {
            position: relative;
            margin-bottom: 20px;
        }
        
        .file-upload-area {
            border: 2px dashed rgba(255, 255, 255, 0.3);
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            background: rgba(255, 255, 255, 0.05);
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .file-upload-area:hover {
            border-color: rgba(255, 255, 255, 0.6);
            background: rgba(255, 255, 255, 0.1);
        }
        
        .file-upload-area.dragover {
            border-color: #4CAF50;
            background: rgba(76, 175, 80, 0.1);
        }
        
        .file-input {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }
        
        .file-upload-content {
            pointer-events: none;
        }
        
        .image-preview {
            position: relative;
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 15px;
            margin-top: 10px;
        }
        
        .remove-image {
            position: absolute;
            top: 5px;
            right: 5px;
            background: rgba(255, 255, 255, 0.8);
            border: none;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: #333;
            font-size: 16px;
        }
        
        .remove-image:hover {
            background: rgba(255, 255, 255, 1);
        }
    </style>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fileUploadArea = document.getElementById('fileUploadArea');
            const fileInput = document.getElementById('foto');
            const imagePreview = document.getElementById('imagePreview');
            const previewImg = document.getElementById('previewImg');
            const removeImage = document.getElementById('removeImage');
            
            // Drag and drop functionality
            fileUploadArea.addEventListener('dragover', function(e) {
                e.preventDefault();
                fileUploadArea.classList.add('dragover');
            });
            
            fileUploadArea.addEventListener('dragleave', function(e) {
                e.preventDefault();
                fileUploadArea.classList.remove('dragover');
            });
            
            fileUploadArea.addEventListener('drop', function(e) {
                e.preventDefault();
                fileUploadArea.classList.remove('dragover');
                
                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    fileInput.files = files;
                    handleFileSelect(files[0]);
                }
            });
            
            // File input change
            fileInput.addEventListener('change', function(e) {
                if (e.target.files.length > 0) {
                    handleFileSelect(e.target.files[0]);
                }
            });
            
            // Remove image
            removeImage.addEventListener('click', function() {
                fileInput.value = '';
                imagePreview.style.display = 'none';
                fileUploadArea.style.display = 'block';
            });
            
            function handleFileSelect(file) {
                // Check file type
                if (!file.type.startsWith('image/')) {
                    alert('Please select an image file');
                    return;
                }
                
                // Check file size (5MB limit)
                if (file.size > 5 * 1024 * 1024) {
                    alert('File size must be less than 5MB');
                    return;
                }
                
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    fileUploadArea.style.display = 'none';
                    imagePreview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
    
    <body class="hold-transition login-page" style="background-image:url(gambar/depan/bg.jpg) no-repeat center center fixed; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;">
    </body>
</html>
