<?= $this->extend('admin/baseLayout') ?>
<?= $this->section('title') ?>
VIDIO
<?= $this->endSection() ?>
<?= $this->section('admin') ?>
<?php 
  $db      = \Config\Database::connect();
  $builder = $db->table('vidio');
  $totalData = $builder->countAll();
 ?>

<div class="container-fluid">


    <div class="row">
        <div class="col-3">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/indexAdmin">Admin</a></li>
                <li class="breadcrumb-item active">Vidio</li>

            </ul>

            <div class="boxSideBar">
                <div class="card">
                    <div class="card-body">
                        <p>Total Vidio :</p>
                        <h3><?php print($totalData); ?></h3>
                    </div>
                </div>
                <br>
                <a href="/vidio/create" class="btn btn-success">Tambah </a>

                <a href="/vidio/deleteAll" class="btn btn-danger"
                    onclick="return confirm('apakah anda yakin ?');">Kosongkan </a>
            </div>
            <?php if (session()->getFlashdata('pesan')): ?>
            <div class="alert alert-success mt-2" role="alert">
                <strong>Success!</strong> <?= session()->getFlashdata('pesan'); ?>
            </div>
            <?php endif; ?>
        </div>
        <div class="col-9">
            <table width="100%" class="table table-striped table-bordered table-hover" id="example">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="10%">Judul</th>
                        <th width="10%">Thumbnail</th>
                        <th width="10%">Tanggal</th>
                        <th width="10%">Kategori</th>
                        <th width="10%">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; 
                    foreach($vidio as $vidio) : ?>
                    <tr class="odd gradeX">
                        <td><?= $i++; ?></td>
                        <td><?= $vidio['Judul']; ?></td>
                        <td class="center"><img src="/assets/imgUpload/<?= $vidio['Thumbnail']; ?>" width="150px"
                                height="100px"></td>
                        <td class="center"><?= $vidio['Tanggal_input']; ?></td>
                        <td class="center"><?= $vidio['Vidio']; ?></td>
                        <td class="center"><a href="/vidio/detail/<?= $vidio['Slug']; ?>"
                                class="btn btn-primary">Detail</a> </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <script src="assets/js/jquery-1.12.4.js"></script>
            <script src="assets/js/jquery.dataTables.min.js"></script>
            <script src="assets/js/dataTables.bootstrap4.min.js"></script>

            <script type="text/javascript">
            $(document).ready(function() {
                $('#example').DataTable();
            });
            </script>
        </div>
    </div>


</div>


<?= $this->endSection() ?>