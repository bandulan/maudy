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
        <div class="container-fluid">

            <div class="col-12 col-md-8 mx-auto mt-3">

                <div class="card card-info">

                    <div id="mapid" style="width: 100%; height: 500px; "></div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="<?= base_url('user/do_upload') ?>" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                                <!--   <?= form_error('nama', '<small class="text-sm text-danger mt-2 mb-3" role="alert">', '</small>'); ?> -->
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat">

                            </div>


                            <label for="">Koordinat</label>
                            <div class="form-group">
                                <input type="text" class="form-control" id="lat" name="lat" placeholder="Latitude" readonly>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="lng" name="lng" placeholder="Longitude" readonly>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-6 form-group">
                                    <div class="form-group">
                                        <label for="start">Tanggal Mulai</label> <br>
                                        <input type="date" name="start" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 form-group">
                                    <div class="form-group">
                                        <label for="start">Tanggal Selesai</label> <br>
                                        <input type="date" name="end" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="gambar">Gambar</label> <br>
                                <input type="file" name="gambar" required>
                            </div>
                        </div>

                        <!--  <div class="card-footer">
                                    <div class="row">
                                        <button type="submit" class="btn btn-info mx-auto">Submit</button></div>
                                </div> -->

                        <br>
                        <br>
                </div>
            </div>


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer fixed-bottom">
    <div class="row">
        <button type="submit" class="btn btn-info mx-auto">Submit</button></div>
    </form>
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
    var latInput = document.querySelector("[name=lat]");
    var lngInput = document.querySelector("[name=lng]");
    var mymap = L.map('mapid').setView([1.120633, 104.03436], 14);

    var marker;
    var CyclOSM = L.tileLayer('https://{s}.tile-cyclosm.openstreetmap.fr/cyclosm/{z}/{x}/{y}.png', {
        maxZoom: 20,
        attribution: '<a href="https://github.com/cyclosm/cyclosm-cartocss-style/releases" title="CyclOSM - Open Bicycle render">CyclOSM</a> | Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(mymap);

    mymap.on("click", function(e) {

        var lat = e.latlng.lat;
        var lng = e.latlng.lng;

        if (!marker) {

            marker = L.marker(e.latlng).addTo(mymap);

        } else {
            marker.setLatLng(e.latlng);

        }
        /* console.log(e.latlng); */
        latInput.value = lat.toFixed(5);
        lngInput.value = lng.toFixed(5);
    })
</script>

</body>

</html>