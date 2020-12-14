<?php
$conn = mysqli_connect('localhost', 'root', '', 'reklame');
$newData = $_POST["dataNew"];
$sql = "SELECT * FROM reklame LIMIT $newData";
$folder = "../asset/upload/";
$data = mysqli_query($conn, $sql);
foreach ($data as $l) :



?>
    <div class="card">

        <!-- /.card-header -->
        <div class="card-body" style="padding: 0px;">
            <div class="row ">
                <div class="col-6">
                    <img src="<?= $folder . $l['gambar']; ?>" class="img-fluid" id="card-img-top">
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


<?php endforeach;
?>