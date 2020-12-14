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

            <div class="col-lg-6 col-12 mx-auto">

                <div class="card card-info card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="<?= base_url('asset/profile/') . $user['foto']; ?>" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center"><?= $user['email']; ?></h3>

                        <p class="text-muted text-center"><?= $user['phone']; ?></p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Nama</b> <a class="float-right"><?= $user['nama']; ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Alamat</b> <a class="float-right"><?= $user['alamat']; ?></a>
                            </li>

                        </ul>

                        <!-- <a href="#" class="btn btn-info btn-block">
                            Edit Profile
                        </a> -->
                    </div>
                </div>
            </div>
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
        var dataCount = 2;
        $("#tombol").click(function() {
            dataCount = dataCount + 2;
            $("#cont").load("<?= base_url('asset/js/file.php'); ?>", {
                dataNew: dataCount
            });
        })
    })
</script>

</body>

</html>