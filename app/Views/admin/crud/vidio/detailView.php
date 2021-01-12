<?= $this->extend('admin/baseLayout') ?>
<?= $this->section('title') ?>
DETAIL VIDIO | <?= $detail['id']; ?>
<?= $this->endSection() ?>
<?= $this->section('admin') ?>


<!-- modal Edit artikel -->
<div class="modal fade" id="editVidio">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <ul class="breadcrumb mb-2">
                    <li class="breadcrumb-item"><a href="/indexAdmin">Admin</a></li>
                    <li class="breadcrumb-item active"><a href="/vidioFU">vidio</a></li>
                    <li class="breadcrumb-item active"><a href="/vidio/detail/<?= $detail['Slug']; ?>">Detail</a></li>
                    <li class="breadcrumb-item active"><a href="#">Edit</a></li>
                    <li class="breadcrumb-item active"><?= $detail['Slug']; ?></li>
                </ul>

                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form action="/vidio/edit/<?= $detail['id']; ?>" method="post">
                    <div class="form-group">
                        <label for="Judul">Judul</label>
                        <input type="text" class="form-control" name="Judul" id="Judul"
                            value="<?= $detail['Judul']; ?>">
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="Tanggal">Tanggal Input</label>
                            <input type="date" class="form-control" name="Tanggal" id="Tanggal"
                                value="<?= $detail['Tanggal_input']; ?>" disabled>
                        </div>
                        <div class="col">
                            <label for="Tanggal_update">Tanggal Update</label>
                            <input type="date" class="form-control" name="Tanggal_update" id="Tanggal_update"
                                value="<?= $detail['Tanggal_update']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Tanggal">Jenis</label>
                        <input type="text" class="form-control" name="Jenis" id="Jenis" value="<?= $detail['Vidio']; ?>"
                            disabled>
                    </div>
                    <div class="form-group mt-2">
                        <label for="Deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" name="Deskripsi" id="Deskripsi"
                            value="<?= $detail['Deskripsi']; ?>">
                    </div>
                    <div class="form-group mt-2">
                        <label for="Link">Link</label>
                        <input type="text" class="form-control" name="Link" id="Link"
                            value="<?= $detail['Deskripsi']; ?>">
                    </div>
                    <br>
                    <label for="Thumbnail">Thumbnail : </label>
                    <br>
                    <img src="/assets/imgUpload/<?= $detail['Thumbnail']; ?>" width="130px" height="130px">
                    <br>
                    <button type="submit" class="btn btn-success mt-2">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <ul class="breadcrumb mb-2">
        <li class="breadcrumb-item"><a href="/indexAdmin">Admin</a></li>
        <li class="breadcrumb-item active"><a href="/vidioFU">vidio</a></li>
        <li class="breadcrumb-item active"><a href="/vidio/detail/<?= $detail['Slug']; ?>">Detail</a></li>
        <li class="breadcrumb-item active"><?= $detail['Slug']; ?></li>
    </ul>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">

                    <img src="/assets/imgUpload/<?= $detail['Thumbnail']; ?>" class="img-thumbnail">
                </div>

                <div class="col-6">
                    <p>Judul : <?= $detail['Judul']; ?></p>
                    <p>Tanggal Input : <?= $detail['Tanggal_input']; ?></p>
                    <p>Tanggal Update : <?= $detail['Tanggal_update']; ?></p>
                    <p>Jenis Vidio: <?= $detail['Vidio']; ?></p>
                    <p><strong>Deskripsi :</strong>
                    <h5 style="text-align:justify;" class="ml-4"><?= $detail['Deskripsi']; ?></h5>
                    </p>
                    <p><strong>Link :</strong> <a href="<?= $detail['Link']; ?>"><?= $detail['Link']; ?></a></p>
                    <br>


                    <hr>
                    <button type="submit" class="btn btn-success" data-toggle="modal"
                        data-target="#editVidio">Edit</button>
                    <form action="/vidio/delete/<?=$detail['id']; ?>" methode="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_methode" Value="DELETE">
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('apakah anda yakin ?');">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>