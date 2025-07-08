<!doctype html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Selamat Datang</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    </head>

    <body>

        <style type="text/css">
            body {
                font-family: 'Roboto', sans-serif;
                margin: 0;
                padding: 0;
                height: 100vh;
                overflow: hidden;
            }

            .main-container {
                display: flex;
                height: 100vh;
            }

            .left-section {
                background: #ffffff;
                width: 50%;
                padding: 60px 80px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
                position: relative;
            }

            .right-section {
                background: linear-gradient(135deg, #d80027 0%, #b8001e 100%);
                width: 50%;
                padding: 60px 80px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                color: white;
                position: relative;
            }

            .logo-section {
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-bottom: 60px;
            }

            .logo-section img {
                width: 120px;
                height: 120px;
                margin-bottom: 20px;
            }

            .logo-text {
                font-size: 32px;
                font-weight: 700;
                color: #d80027;
            }

            .welcome-title {
                font-size: 36px;
                font-weight: 300;
                color: #333;
                margin-bottom: 40px;
            }

            .login-btn {
                display: inline-block;
                padding: 16px 40px;
                background: #d80027;
                color: white;
                text-decoration: none;
                border-radius: 8px;
                font-size: 16px;
                font-weight: 500;
                transition: background 0.3s ease;
                margin-top: 20px;
            }

            .login-btn:hover {
                background: #b8001e;
                text-decoration: none;
                color: white;
            }

            .form-group {
                margin-bottom: 24px;
            }

            .form-label {
                display: block;
                font-size: 14px;
                font-weight: 500;
                color: #333;
                margin-bottom: 8px;
            }

            .form-input {
                width: 100%;
                padding: 16px 20px;
                border: 1px solid #e0e0e0;
                border-radius: 8px;
                font-size: 16px;
                transition: border-color 0.3s ease;
                box-sizing: border-box;
            }

            .form-input:focus {
                outline: none;
                border-color: #d80027;
                box-shadow: 0 0 0 3px rgba(216, 0, 39, 0.1);
            }

            .password-input {
                position: relative;
            }

            .forgot-password {
                text-align: right;
                margin-top: 8px;
            }

            .forgot-password a {
                color: #d80027;
                text-decoration: none;
                font-size: 14px;
            }

            .signin-btn {
                width: 100%;
                padding: 16px;
                background: #d80027;
                color: white;
                border: none;
                border-radius: 8px;
                font-size: 16px;
                font-weight: 500;
                cursor: pointer;
                transition: background 0.3s ease;
                margin-bottom: 24px;
            }

            .signin-btn:hover {
                background: #b8001e;
            }

            .divider {
                text-align: center;
                color: #999;
                margin: 24px 0;
                position: relative;
            }

            .divider::before {
                content: '';
                position: absolute;
                top: 50%;
                left: 0;
                right: 0;
                height: 1px;
                background: #e0e0e0;
            }

            .divider span {
                background: white;
                padding: 0 16px;
            }

            .social-btn {
                width: 100%;
                padding: 14px;
                border: 1px solid #e0e0e0;
                border-radius: 8px;
                background: white;
                color: #333;
                font-size: 14px;
                font-weight: 500;
                cursor: pointer;
                margin-bottom: 12px;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: border-color 0.3s ease;
            }

            .social-btn:hover {
                border-color: #ccc;
            }

            .signup-link {
                text-align: center;
                margin-top: 24px;
                color: #666;
                font-size: 14px;
            }

            .signup-link a {
                color: #d80027;
                text-decoration: none;
                font-weight: 500;
            }

            .right-content h2 {
                font-size: 48px;
                font-weight: 300;
                line-height: 1.2;
                margin-bottom: 32px;
            }

            .testimonial {
                background: rgba(255, 255, 255, 0.1);
                padding: 24px;
                border-radius: 12px;
                margin-bottom: 40px;
                backdrop-filter: blur(10px);
            }

            .testimonial-text {
                font-size: 18px;
                line-height: 1.6;
                margin-bottom: 20px;
                font-style: italic;
            }

            .testimonial-author {
                display: flex;
                align-items: center;
            }

            .author-avatar {
                width: 48px;
                height: 48px;
                border-radius: 50%;
                margin-right: 16px;
                background: #fff;
            }

            .author-info h4 {
                font-size: 16px;
                font-weight: 600;
                margin: 0;
            }

            .author-info p {
                font-size: 14px;
                opacity: 0.8;
                margin: 0;
            }

            .partners {
                margin-top: 40px;
            }

            .partners-title {
                font-size: 14px;
                font-weight: 500;
                margin-bottom: 20px;
                opacity: 0.8;
            }

            .partners-grid {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 20px;
            }

            .partner-logo {
                opacity: 0.7;
                transition: opacity 0.3s ease;
            }

            .partner-logo:hover {
                opacity: 1;
            }

            @media (max-width: 768px) {
                body {
                    overflow-y: auto;
                }
                
                .main-container {
                    flex-direction: column;
                    overflow-y: auto;
                    height: auto;
                    min-height: 100vh;
                }
                
                .left-section, .right-section {
                    width: 100%;
                    padding: 30px 20px;
                }
                
                .left-section {
                    order: 1;
                }
                
                .right-section {
                    order: 2;
                    min-height: 300px;
                }
                
                .logo-section img {
                    width: 100px;
                    height: 100px;
                }
                
                .logo-text {
                    font-size: 24px;
                }
                
                .welcome-title {
                    font-size: 24px;
                    text-align: center;
                    margin-bottom: 30px;
                }
                
                .right-content h2 {
                    font-size: 28px;
                }
                
                .testimonial {
                    padding: 20px;
                }
                
                .partners-grid {
                    grid-template-columns: repeat(2, 1fr);
                    gap: 15px;
                }
            }
            
            @media (max-width: 480px) {
                .left-section, .right-section {
                    padding: 20px 15px;
                }
                
                .logo-section img {
                    width: 80px;
                    height: 80px;
                }
                
                .logo-text {
                    font-size: 20px;
                }
                
                .welcome-title {
                    font-size: 20px;
                    line-height: 1.4;
                }
                
                .login-btn {
                    padding: 14px 30px;
                    font-size: 14px;
                }
                
                .right-content h2 {
                    font-size: 24px;
                }
                
                .testimonial-text {
                    font-size: 16px;
                }
                
                .partners-grid {
                    grid-template-columns: 1fr;
                }
            }
        </style>

        <div class="main-container">
            <div class="left-section">
                <div class="logo-section">
                    <img src="assets/img/Logo.png" alt="Logo" style="width: 150px; height: 150px;">
                    <div class="logo-text">SiArsip</div>
                </div>
                
                <div class="welcome-title">Selamat Datang di Aplikasi Elektronik Arsip</div>
                
                <a href="login.php" class="login-btn">LOGIN</a>
            </div>
            
            <div class="right-section">
                <div class="right-content" style="background-image: url('assets/img/bg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; height: 100%; position: absolute; top: 0; left: 0;">
                </div>
                </div>
            </div>
        </div>

        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

    </html>