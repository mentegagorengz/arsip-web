<!-- Footer Section -->
<footer class="main-footer text-sm" style="background-color: #B22222; color: white; padding: 10px 20px; margin-top: 20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <strong>Copyright © <?php echo date('Y'); ?>. Aplikasi Pengarsipan.</strong> All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 1.0.0
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Footer Styles -->
<style>
    .main-footer {
        display: block;
        unicode-bidi: isolate;
        border-top: 1px solid #dee2e6;
        color: #6c757d;
        font-size: 0.875rem;
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
    }
</style>

<!-- Close main wrapper -->
</div>

<!-- JavaScript Libraries -->
<!-- jQuery -->
<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>

<!-- Bootstrap -->
<script src="../assets/js/bootstrap.min.js"></script>

<!-- Animation & Effects -->
<script src="../assets/js/wow.min.js"></script>
<script src="../assets/js/jquery.sticky.js"></script>
<script src="../assets/js/jquery.scrollUp.min.js"></script>

<!-- UI Components -->
<script src="../assets/js/jquery-price-slider.js"></script>
<script src="../assets/js/jquery.meanmenu.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>

<!-- Counter & Statistics -->
<script src="../assets/js/counterup/jquery.counterup.min.js"></script>
<script src="../assets/js/counterup/waypoints.min.js"></script>
<script src="../assets/js/counterup/counterup-active.js"></script>

<!-- Scrollbar -->
<script src="../assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../assets/js/scrollbar/mCustomScrollbar-active.js"></script>

<!-- Navigation Menu -->
<script src="../assets/js/metisMenu/metisMenu.min.js"></script>
<script src="../assets/js/metisMenu/metisMenu-active.js"></script>

<!-- Charts -->
<script src="../assets/js/morrisjs/raphael-min.js"></script>
<script src="../assets/js/morrisjs/morris.js"></script>
<script src="../assets/js/morrisjs/morris-active.js"></script>
<script src="../assets/js/sparkline/jquery.sparkline.min.js"></script>
<script src="../assets/js/sparkline/jquery.charts-sparkline.js"></script>
<script src="../assets/js/sparkline/sparkline-active.js"></script>

<!-- Calendar -->
<script src="../assets/js/calendar/moment.min.js"></script>
<script src="../assets/js/calendar/fullcalendar.min.js"></script>
<script src="../assets/js/calendar/fullcalendar-active.js"></script>

<!-- Main Scripts -->
<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/main.js"></script>

<!-- DataTables -->
<script src="../assets/js/DataTables/datatables.js"></script>

<!-- PDF Viewer -->
<script src="../assets/js/pdf/jquery.media.js"></script>
<script src="../assets/js/pdf/pdf-active.js"></script>

<!-- Custom Scripts -->
<script type="text/javascript">
    $(document).ready(function() {
        // Initialize DataTables
        $('.table-datatable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json"
            },
            "responsive": true,
            "autoWidth": false
        });
    });
</script>

<script>
    // Mobile Menu Toggle Functions
    function toggleMobileMenu() {
        const sidebar = document.querySelector('.left-sidebar-pro');
        const overlay = document.querySelector('.mobile-overlay');
        const closeBtn = document.querySelector('.mobile-close-btn');
        
        sidebar.classList.toggle('active');
        overlay.classList.toggle('active');
        
        if (window.innerWidth <= 768) {
            closeBtn.style.display = sidebar.classList.contains('active') ? 'block' : 'none';
        }
    }
    
    function closeMobileMenu() {
        const sidebar = document.querySelector('.left-sidebar-pro');
        const overlay = document.querySelector('.mobile-overlay');
        const closeBtn = document.querySelector('.mobile-close-btn');
        
        sidebar.classList.remove('active');
        overlay.classList.remove('active');
        closeBtn.style.display = 'none';
    }
    
    // Close mobile menu when clicking on menu items
    document.querySelectorAll('.left-sidebar-menu-pro a').forEach(link => {
        link.addEventListener('click', function() {
            if (window.innerWidth <= 768) {
                closeMobileMenu();
            }
        });
    });
    
    // Show/hide mobile menu button based on screen size
    function checkScreenSize() {
        const toggleBtn = document.querySelector('.mobile-menu-toggle');
        const sidebar = document.querySelector('.left-sidebar-pro');
        
        if (window.innerWidth > 768) {
            toggleBtn.style.display = 'none';
            sidebar.classList.remove('active');
            document.querySelector('.mobile-overlay').classList.remove('active');
        } else {
            toggleBtn.style.display = 'block';
        }
    }
    
    // Check screen size on load and resize
    window.addEventListener('load', checkScreenSize);
    window.addEventListener('resize', checkScreenSize);
</script>

</body>
</html>