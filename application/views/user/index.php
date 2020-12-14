<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?= $title ?></h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="col-lg-5 col-12 mb-5 mx-auto " id="cont">

                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'reklame');
                $sql = "SELECT * FROM reklame LIMIT 3";
                $data = mysqli_query($conn, $sql);
                foreach ($data as $l) :

                ?>
                    <div class="card ">

                        <!-- /.card-header -->
                        <div class="card-body no-gutters" style="padding: 0px;">
                            <div class="row ">
                                <div class="col-6">
                                    <img src="<?= base_url('asset/upload/') . $l['gambar']; ?>" class="img-fluid" id="card-img-top">
                                </div>
                                <div class="col-6">
                                    <p id="nama"><?= $l['nama_iklan']; ?> <br></p>
                                    <p id="alamat"><i class="fas fa-map-marker-alt"></i> <?= $l['alamat']; ?> <br></p>
                                    <p id="start"><i class="fas fa-calendar-check"></i> Start <?= $l['start']; ?> <br></p>
                                    <p id="end"><i class="fas fa-calendar-times"></i> End <?= $l['end']; ?> <br></p>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->


                <?php endforeach;
                ?>

                <br>



            </div><!-- /.container-fluid -->
            <br>
        </div>
        <br>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer fixed-bottom">
    <div class="row">
        <a class="btn btn-info mx-auto text-light" id="tombol">More Data</a>
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
    $(document).ready(function() {
        var dataCount = 3;
        $("#tombol").click(function() {
            dataCount = dataCount + 3;
            $("#cont").load("<?= base_url('asset/js/file.php'); ?>", {
                dataNew: dataCount
            });
        })
    })
</script>

</body>

</html>