<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <?php


        ?>

        <div id="mapid" style="width: 100%; height: 75vh"></div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer fixed-bottom">
    <div class="row">

        <a class="btn btn-primary mx-auto" href="<?= base_url('user/tambah') ?>">Tambah Data</a>
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('lte/plugins'); ?>/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('lte/plugins'); ?>/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('lte/plugins'); ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('lte/plugins'); ?>/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('lte/plugins'); ?>/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url('lte/plugins'); ?>/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('lte/plugins'); ?>/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('lte/plugins'); ?>/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url('lte/plugins'); ?>/moment/moment.min.js"></script>
<script src="<?= base_url('lte/plugins'); ?>/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('lte/plugins'); ?>/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url('lte/plugins'); ?>/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('lte/plugins'); ?>/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('lte/dist'); ?>/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('lte/dist'); ?>/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('lte/dist'); ?>/js/demo.js"></script>
<script>
    var mymap = L.map('mapid').setView([1.120633, 104.03436], 13);
    var Stadia_AlidadeSmooth = L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth/{z}/{x}/{y}{r}.png', {
        maxZoom: 20,
        attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
    }).addTo(mymap);

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "reklame";

    $conn = mysqli_connect($servername, $username, $password, $db);
    $sql = "SELECT * FROM reklame";

    $data = mysqli_query($conn, $sql);
    foreach ($data as $d) :
    ?>

        L.marker([<?= $d['lat'] ?>, <?= $d['lon'] ?>]).addTo(mymap).bindPopup('Nama Iklan: <?= $d['nama_iklan'] ?></br> Alamat: <?= $d['alamat'] ?>');
    <?php
    endforeach; ?>
</script>

</body>

</html>