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
 ?>


<div class="container-fluid">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="/indexAdmin">Admin</a></li>
        <li class="breadcrumb-item active">Dashboard</li>

    </ul>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <div class="card bg-warning">
                <div class="card-body">
                    <div class="row">
                        <div class="col-1">
                            <img src="assets/images/icon/text-file.png" width="30px" height="30px">
                        </div>
                        <div class="col-11">
                            <h4><strong>Jumlah Postingan Foto</strong></h4>
                        </div>
                    </div>
                    <hr>
                    <h1><?php print($totalDataFoto); ?></h1>
                    <a class="btn btn-light mt-3" href="/fotoFU">Kelola</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card bg-success">
                <div class="card-body">
                    <div class="row">
                        <div class="col-1">
                            <img src="assets/images/icon/text-file.png" width="30px" height="30px">
                        </div>
                        <div class="col-11">
                            <h4><strong>Jumlah Postingan Vidio</strong></h4>
                        </div>
                    </div>
                    <hr>
                    <h1><?php print($totalDataVidio); ?></h1>
                    <a class="btn btn-light mt-3" href="/vidioFU">Kelola</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card bg-primary">
                <div class="card-body">
                    <div class="row">
                        <div class="col-1">
                            <img src="assets/images/icon/text-file.png" width="30px" height="30px">
                        </div>
                        <div class="col-11">
                            <h4><strong>Jumlah Postingan Lainnya</strong></h4>
                        </div>
                    </div>
                    <hr>
                    <h1><?php print($totalDataArtikel); ?></h1>
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
            <p><img src="assets/images/icon/bar-graph-on-a-rectangle.png" width="25px" height="25px">
                <strong>Total Kunjungan</strong>
            </p>
            <div class="container">
                <canvas id="myChart" width="90" height="47"></canvas>
            </div>
            <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Januari", "Februari", "Maret", "April", "Mei", "juni", "Juli", "Agustus",
                        "September", "Oktober", "November", "Desember",
                    ],
                    datasets: [{
                        label: 'Total',
                        data: [1000, 800, 600, 400, 200, 100],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            </script>
        </div>
        <div class="col-4">
            <p><img src="assets/images/icon/trello-website-logo.png" width="25px" height="25px">
                <strong>Total Kunjungan Bulan Ini</strong>
            </p>

            <div class="card">
                <div class="card-body">
                    2000
                </div>
            </div>
            <hr />
            <br>
            <p><img src="assets/images/icon/trello-website-logo.png" width="25px" height="25px">
                <strong>Total Kunjungan Hari Ini</strong>
            </p>

            <div class="card">
                <div class="card-body">
                    100</div>
            </div>
            <hr>
            <br>
            <p><img src="assets/images/icon/trello-website-logo.png" width="25px" height="25px">
                <strong>Sedang Online</strong>
            </p>

            <div class="card">
                <div class="card-body">
                    2000
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<?= $this->endSection() ?>