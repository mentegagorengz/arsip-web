<!-- Footer Section -->
<footer class="main-footer text-sm" style="background-color: #404040; color: white; padding: 10px 20px; margin-top: 20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <strong>Copyright © <?php echo date('Y'); ?>. Aplikasi Pengarsipan.</strong> Semua hak dilindungi.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Versi</b> 1.0.0
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Footer Styles -->
<style>
    body {
        margin-bottom: 70px; /* Add space at bottom to prevent content being hidden behind sticky footer */
    }
    
    .main-footer {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
        z-index: 1000;
        display: block;
        unicode-bidi: isolate;
        border-top: 1px solid #dee2e6;
        color: #6c757d;
        font-size: 0.875rem;
        background-color: #404040 !important;
        box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
    }
    
    .main-footer strong {
        color: white;
    }
    
    .main-footer .float-right {
        float: right;
        color: white;
    }
    
    .main-footer .float-right b {
        color: white;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .main-footer .float-right {
            float: none;
            display: block;
            text-align: center;
            margin-top: 10px;
        }
        
        .main-footer {
            text-align: center;
        }
        
        body {
            margin-bottom: 90px; /* Increase bottom margin for mobile */
        }
    }
</style>
