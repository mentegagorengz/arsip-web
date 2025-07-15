<!doctype html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Selamat Datang</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="manifest" href="manifest.json">
        <meta name="theme-color" content="#d80027">
    </head>

    <body>

        <style type="text/css">
            .navbar-siad {
                background: #d80027;
                border-radius: 0px;
                border: 1px solid #d80027;
                margin: 0px;
                padding: 20px 0px;
            }
            .navbar-inverse .navbar-brand {
                color: #fff;
            }
            .navbar-inverse .navbar-nav > li > a {
                color: #fff;
            }
            .navbar-siad > li > a {
                color: #d80027 !important;
            }
            .banner {
                background: #d80027;
                border-radius: 0px;
                border: 1px solid #d80027;
                padding: 60px 0px;
                color: white;
            }
            .banner a {
                padding: 15px 25px;
                color: white;
                border: 1px solid white;
                transition: all 0.5s;
                margin-right: 10px;
                display: inline-block;
            }
            .banner a:hover {
                text-decoration: none;
                border: 1px dashed white;
            }
            .banner p {
                font-size: 13pt;
            }
            .banner h1 {
                font-size: 2.2rem;
                font-weight: 700;
                margin-bottom: 18px;
            }
            @media (max-width: 991px) {
                .banner {
                    padding: 40px 0px;
                }
                .banner h1 {
                    font-size: 1.5rem;
                }
                .banner p {
                    font-size: 1rem;
                }
            }
            @media (max-width: 767px) {
                .banner {
                    padding: 25px 0px;
                }
                .banner .container {
                    padding: 0 10px;
                }
                .banner h1 {
                    font-size: 1.2rem;
                }
                .banner p {
                    font-size: 0.95rem;
                }
                .banner a {
                    padding: 12px 18px;
                    font-size: 1rem;
                    margin-bottom: 10px;
                }
                .banner img[alt="Logo"] {
                    height: 180px !important;
                    max-width: 90vw;
                }
                .banner .col-lg-6 {
                    margin-bottom: 20px;
                }
            }
            @media (max-width: 575px) {
                .banner {
                    padding: 10px 0px;
                }
                .banner h1 {
                    font-size: 1rem;
                }
                .banner img[alt="Logo"] {
                    height: 120px !important;
                }
                .banner a {
                    padding: 10px 12px;
                    font-size: 0.95rem;
                }
            }
        </style>



        <nav class="navbar navbar-inverse navbar-siad">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header ">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
               

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <!-- <ul class="nav navbar-nav">
                        <li><a href="#">Link <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown"
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul> -->

                   
                </div>
            </div>
        </nav>
        

        <div class="banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12 text-center mb-4 mb-lg-0 d-flex flex-column justify-content-center align-items-center">
                        <img style="margin-top:-12px; max-width: 100%; height: auto; background: transparent; box-shadow: none;" src="assets/img/Logo.png" alt="Logo" height="300">
                        <h1 style="background: transparent;">Selamat Datang di Aplikasi Elektronik Arsip</h1>
                        <p style="background: transparent;">Aplikasi ini dirancang untuk mengoptimalkan pengelolaan arsip dinamis inaktif dengan fitur pencarian arsip secara cepat beserta laporan arsip</p>
                        <a href="login.php" style="background: transparent; border: 1px solid #fff; color: #fff;">LOGIN</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 text-center d-flex flex-column justify-content-center align-items-center">
                        <img src="gambar/depan/1.png" style="max-width: 100%; height: auto; background: transparent; box-shadow: none;">
                    </div>
                </div>
            </div>
        </div>




        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="script.js"></script>
    </body>

    </html>