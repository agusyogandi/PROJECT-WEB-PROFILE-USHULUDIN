<?= $this->extend('admin/baseLayout') ?>
<?= $this->section('title') ?>
TAMBAH ARTIKEL
<?= $this->endSection() ?>
<?= $this->section('admin') ?>
<div class="container">

    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="/indexAdmin">Admin</a></li>
        <li class="breadcrumb-item active"><a href="/artikelFU">Karya Ilmiah</a></li>
        <li class="breadcrumb-item active">Tambah</li>

    </ul>

    <div class="card">
        <div class="card-body">
            <?php echo form_open_multipart('/artikel/save') ?>
            <?= csrf_field(); ?>
            <div class="form-group">
                <input type="text" class="form-control <?= ($validation->hasError('Judul')) ? 'is-invalid' : ''; ?>"
                    id="Judul" placeholder="Judul" name="Judul">
                <div class="invalid-feedback">
                    <?= $validation->getError('Judul'); ?>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="Penulis" id="Penulis" placeholder="Penulis">
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="Tanggal">Jenis :</label>
                    <div class="form-group">
                        <select class="form-control" id="Jenis" name="Jenis">
                            <option>Artikel</option>
                            <option>Buku</option>
                            <option>Jurnal</option>
                            <option>Kliping Koran</option>
                            <option>Opini</option>
                            <option>Berita</option>
                            <option>Inspirasi Pagi</option>
                            <option>Event</option>
                            <option>Info Akademik</option>
                        </select>
                    </div>
                </div>
                <div class="col">

                    <label for="Tanggal">Tanggal Input :</label>
                    <input type="date" class="form-control" name="Tanggal" id="Tanggal" placeholder="Tanggal">
                </div>
            </div>
            <!-- <div class="form-group">
                <input type="text" class="form-control" name="Abstrak" id="Abstrak" placeholder="Abstrak / Deskripsi">
            </div> -->
            <div class="form-group">
                <label for="Abstrak">Abstrak / Deskripsi:</label>
                <textarea class="form-control" rows="5" id="abstrak" name="Abstrak"></textarea>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="Link" id="Link" placeholder="Link">
            </div>
            <div class="form-group">
                <label for="Image">Images :</label>
                <input type="file" class="form-control-file border" name="Image" id="Image">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>


<?= $this->endSection() ?>