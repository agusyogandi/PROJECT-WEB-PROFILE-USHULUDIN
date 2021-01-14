<?= $this->extend('admin/baseLayout') ?>
<?= $this->section('title') ?>
DASHBOARD
<?= $this->endSection() ?>
<?= $this->section('admin') ?>
<?php 

  $db      = \Config\Database::connect();
  $builder = $db->table('artikel');
  $totalDataArtikel = $builder->countAll();
  $builder = $db->table('foto');
  $totalDataFoto = $builder->countAll();
  $builder = $db->table('vidio');
  $totalDataVidio = $builder->countAll();
  $builder = $db->table('event');
  $totalDataEvent = $builder->countAll();
 ?>


<div class="container-fluid">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="/indexAdmin">Admin</a></li>
        <li class="breadcrumb-item active">Dashboard</li>

    </ul>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <div class="card bg-warning">
                <div class="card-body">
                    <p><img src="assets/images/icon/text-file.png" width="25px" height="25px">
                        <strong>Foto</strong>
                    </p>
                    <hr>
                    <h1><?php print($totalDataFoto); ?> DATA</h1>
                    <a class="btn btn-light mt-3" href="/fotoFU">Kelola</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card bg-success">
                <div class="card-body">
                    <p><img src="assets/images/icon/text-file.png" width="25px" height="25px">
                        <strong>Vidio</strong>
                    </p>
                    <hr>
                    <h1><?php print($totalDataVidio); ?> DATA</h1>
                    <a class="btn btn-light mt-3" href="/vidioFU">Kelola</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card bg-secondary">
                <div class="card-body">
                    <p><img src="assets/images/icon/text-file.png" width="25px" height="25px">
                        <strong>Event</strong>
                    </p>
                    <hr>
                    <h1><?php print($totalDataEvent); ?> DATA</h1>
                    <a class="btn btn-light mt-3" href="/eventFU">Kelola</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card bg-primary">
                <div class="card-body">
                    <p><img src="assets/images/icon/text-file.png" width="25px" height="25px">
                        <strong>Lainnya</strong>
                    </p>
                    <hr>
                    <h1><?php print($totalDataArtikel); ?> DATA </h1>
                    <a class="btn btn-light mt-3" href="/artikel">Kelola</a>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>



<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">

                            <h2 class="ml-4">Diagram Pengunjung</h2>


                        </div>
                        <div class="col-4">
                            <center>
                                <a href="/hapusPengunjung" class="btn btn-danger">hapus data pengunjung</a>
                            </center>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-4">
            <p><img src="assets/images/icon/trello-website-logo.png" width="25px" height="25px">
                <strong>Total Kunjungan</strong>
            </p>

            <div class="card">
                <div class="card-body">
                    <?php 
                    if ($totalpengunjung >= 1){
                        echo $totalpengunjung;
                    }
                    if ($totalpengunjung == 0){
                        echo("Tidak Ada Data");
                    }
                    else {
                        # code...
                    }
                   ?>
                </div>
            </div>
            <hr />
            <br>
            <p><img src="assets/images/icon/trello-website-logo.png" width="25px" height="25px">
                <strong>Total Kunjungan Hari Ini</strong>
            </p>

            <div class="card">
                <div class="card-body">
                    <?php                    
                    if($pengunjunghariini >= 1){
                        echo $pengunjunghariini;
                    }
                   if ($pengunjunghariini == 0){
                        echo("Tidak Ada Data");
                    }
                    else {
                        # code...
                    }?>
                </div>
            </div>
            <hr>
            <br>
            <p><img src="assets/images/icon/trello-website-logo.png" width="25px" height="25px">
                <strong>Sedang Online</strong>
            </p>

            <div class="card">
                <div class="card-body">
                    <?php                     
                    if($pengunjungonline >= 1){
                        echo $pengunjungonline;
                    }
                    if($pengunjungonline == 0){
                        echo("Tidak Ada Data");
                    }
                    else {
                        # code...
                    }?>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<?= $this->endSection() ?>