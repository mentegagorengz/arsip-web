
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
        background-color: #B22222 !important;
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

<!-- Close main wrapper -->
</div>


<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/wow.min.js"></script>
<script src="../assets/js/jquery-price-slider.js"></script>
<script src="../assets/js/jquery.meanmenu.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/jquery.sticky.js"></script>
<script src="../assets/js/jquery.scrollUp.min.js"></script>
<script src="../assets/js/counterup/jquery.counterup.min.js"></script>
<script src="../assets/js/counterup/waypoints.min.js"></script>
<script src="../assets/js/counterup/counterup-active.js"></script>
<script src="../assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../assets/js/scrollbar/mCustomScrollbar-active.js"></script>
<script src="../assets/js/metisMenu/metisMenu.min.js"></script>
<script src="../assets/js/metisMenu/metisMenu-active.js"></script>
<script src="../assets/js/morrisjs/raphael-min.js"></script>
<script src="../assets/js/morrisjs/morris.js"></script>
<script src="../assets/js/morrisjs/morris-active.js"></script>
<script src="../assets/js/sparkline/jquery.sparkline.min.js"></script>
<script src="../assets/js/sparkline/jquery.charts-sparkline.js"></script>
<script src="../assets/js/sparkline/sparkline-active.js"></script>
<script src="../assets/js/calendar/moment.min.js"></script>
<script src="../assets/js/calendar/fullcalendar.min.js"></script>
<script src="../assets/js/calendar/fullcalendar-active.js"></script>
<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/main.js"></script>

<script src="../assets/js/DataTables/datatables.js"></script>
<script src="../assets/js/pdf/jquery.media.js"></script>
<script src="../assets/js/pdf/pdf-active.js"></script>


<script type="text/javascript">
    $(document).ready( function () {
        $('.table-datatable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json"
            },
            "responsive": true,
            "autoWidth": false
        });


        Morris.Area({
            element: 'extra-area-chart',
            data: [

            <?php 
            $dateBegin = strtotime("first day of this month");  
            $dateEnd = strtotime("last day of this month");

            $awal = date("Y/m/d", $dateBegin);         
            $akhir = date("Y/m/d", $dateEnd);

            $arsip = mysqli_query($koneksi,"SELECT * FROM riwayat WHERE date(riwayat_waktu) >= '$awal' AND date(riwayat_waktu) <= '$akhir'");
            while($p = mysqli_fetch_array($arsip)){
                $tgl = date('Y/m/d',strtotime($p['riwayat_waktu']));
                $jumlah = mysqli_query($koneksi,"select * from riwayat where date(riwayat_waktu)='$tgl'");
                $j = mysqli_num_rows($jumlah);
                ?>
                {
                    period: '<?php echo date('Y-m-d',strtotime($p['riwayat_waktu'])) ?>',
                    Unduh: <?php echo $j ?>,
                },
                <?php 
            }
            ?>

            ],
            xkey: 'period',
            ykeys: ['Unduh'],
            labels: ['Unduh'],
            xLabels: 'day',
            xLabelAngle: 45,
            pointSize: 3,
            fillOpacity: 0,
            pointStrokeColors:['#006DF0'],
            behaveLikeLine: true,
            gridLineColor: '#e0e0e0',
            lineWidth: 1,
            hideHover: 'auto',
            lineColors: ['#006DF0'],
            resize: true

        });
    });


</script>

<style>
    .fa-cloud {
        color: white !important;
    }
    .fa-download {
        color: black !important;
    }
    .fa-file-word-o {
        color: white !important;
    }
    .fa-trash {
        color: white !important;
    }
    .pagination>.active>a {
        background-color: #B22222;
        border-color: #B22222;
    }
    .fa-arrow-left {
        color: white !important;
    }
    /* .btn {
        color: white !important;
    } */
</style>

</body>

</html>