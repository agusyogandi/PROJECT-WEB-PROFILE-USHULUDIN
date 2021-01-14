<?= $this->extend('admin/baseLayout') ?>
<?= $this->section('title') ?>
DETAIL ARTIKEL | <?= $detail['id']; ?>
<?= $this->endSection() ?>
<?= $this->section('admin') ?>


<!-- modal Edit artikel -->
<div class="modal fade" id="editArtikel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <ul class="breadcrumb mb-2">
                    <li class="breadcrumb-item"><a href="/indexAdmin">Admin</a></li>
                    <li class="breadcrumb-item active"><a href="/eventFU">Event</a></li>
                    <li class="breadcrumb-item active"><a href="/event/detail/<?= $detail['Slug']; ?>">Detail</a></li>
                    <li class="breadcrumb-item active"><a href="#">Edit</a></li>
                    <li class="breadcrumb-item active"><?= $detail['Slug']; ?></li>
                </ul>

                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form action="/event/edit/<?= $detail['id']; ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <input type="text" class="form-control" id="Judul" placeholder="<?= $detail['Judul']; ?>"
                            name="Judul">

                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="Kontak" id="Kontak"
                            placeholder="<?= $detail['Kontak']; ?>">
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="Tanggal_mulai">Tanggal Mulai :</label>
                            <input type="date" class="form-control" name="Tanggal_mulai" id="Tanggal_mulai"
                                placeholder="Tanggal Mulai">
                        </div>
                        <div class="col">

                            <label for="Tanggal">Tanggal Selesai :</label>
                            <input type="date" class="form-control" name="Tanggal_selesai" id="Tanggal_selesai"
                                placeholder="Tanggal Selesai">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="Tanggal">Tanggal Input :</label>
                        <input type="date" class="form-control" name="Tanggal_input" id="Tanggal_input"
                            placeholder="<?= $detail['Tanggal_input']; ?>" disabled
                            value="<?= $detail['Tanggal_input']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Tanggal">Tanggal Update :</label>
                        <input type="date" class="form-control" name="Tanggal_update" id="Tanggal_update"
                            placeholder="Tanggal_udate">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Acara:</label>
                        <textarea class="form-control" rows="5" id="deskripsi" name="deskripsi"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="Komite" id="Komite"
                            placeholder="<?= $detail['Komite']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="Lokasi" id="Lokasi"
                            placeholder="<?= $detail['Lokasi']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="Link" id="Link"
                            placeholder="<?= $detail['Link']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Image">Images :</label>
                        <br>
                        <img src="/assets/imgUpload/<?= $detail['Image']; ?>" width="130px" height="130px">
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <ul class="breadcrumb mb-2">
        <li class="breadcrumb-item"><a href="/indexAdmin">Admin</a></li>
        <li class="breadcrumb-item active"><a href="/eventFU">Event</a></li>
        <li class="breadcrumb-item active"><a href="/event/detail/<?= $detail['Slug']; ?>">Detail</a></li>
        <li class="breadcrumb-item active"><?= $detail['Slug']; ?></li>
    </ul>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">

                    <img src="/assets/imgUpload/<?= $detail['Image']; ?>" class="img-thumbnail">
                </div>

                <div class="col-6">
                    <p>Judul Event: <?= $detail['Judul']; ?></p>
                    <p>Komite : <?= $detail['Komite']; ?></p>
                    <p>Tanggal Mulai Event : <?= $detail['Tanggal_mulai']; ?></p>
                    <p>Tanggal Selesai Event : <?= $detail['Tanggal_selesai']; ?></p>
                    <p>Tanggal Input : <?= $detail['Tanggal_input']; ?></p>
                    <p>Tanggal Update : <?= $detail['Tanggal_update']; ?></p>

                    <p><strong>Deskripsi Event :</strong>
                    <h5 style="text-align:justify;" class="ml-4"><?= $detail['Deskripsi']; ?></h5>
                    </p>
                    <br>
                    <p><strong>Link :</strong> <a href="<?= $detail['Link']; ?>"><?= $detail['Link']; ?></a></p>

                    <hr>
                    <button type="submit" class="btn btn-success" data-toggle="modal"
                        data-target="#editArtikel">Edit</button>
                    <form action="/event/delete/<?=$detail['id']; ?>" methode="post" class="d-inline">
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