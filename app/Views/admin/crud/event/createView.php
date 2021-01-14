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
            <?php echo form_open_multipart('/event/save') ?>
            <?= csrf_field(); ?>
            <div class="form-group">
                <input type="text" class="form-control <?= ($validation->hasError('Judul')) ? 'is-invalid' : ''; ?>"
                    id="Judul" placeholder="Judul Acara" name="Judul">
                <div class="invalid-feedback">
                    <?= $validation->getError('Judul'); ?>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="Kontak" id="Kontak" placeholder="Kontak">
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

            <!-- <div class="form-group">
                <input type="text" class="form-control" name="Abstrak" id="Abstrak" placeholder="Abstrak / Deskripsi">
            </div> -->
            <br>
            <div class="form-group">
                <label for="Tanggal">Tanggal Input :</label>
                <input type="date" class="form-control" name="Tanggal_input" id="Tanggal_input"
                    placeholder="Tanggal Input">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi Acara:</label>
                <textarea class="form-control" rows="5" id="deskripsi" name="deskripsi"></textarea>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="Komite" id="Komite" placeholder="Komite">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="Lokasi" id="Lokasi" placeholder="Lokasi">
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