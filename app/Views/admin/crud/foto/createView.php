<?= $this->extend('admin/baseLayout') ?>
<?= $this->section('title') ?>
TAMBAH FOTO
<?= $this->endSection() ?>
<?= $this->section('admin') ?>
<div class="container">

    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="/indexAdmin">Admin</a></li>
        <li class="breadcrumb-item active"><a href="/fotoFU">Foto</a></li>
        <li class="breadcrumb-item active">Tambah</li>

    </ul>

    <div class="card">
        <div class="card-body">
            <?php echo form_open_multipart('/foto/save') ?>
            <?= csrf_field(); ?>
            <div class="form-group">
                <input type="text" class="form-control <?= ($validation->hasError('Judul')) ? 'is-invalid' : ''; ?>"
                    id="Judul" placeholder="Judul" name="Judul">
                <div class="invalid-feedback">
                    <?= $validation->getError('Judul'); ?>
                </div>
            </div>
            <div class="form-group">
                <input type="date" class="form-control" name="Tanggal" id="Tanggal" placeholder="Tanggal">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="Deskripsi" id="Deskripsi" placeholder="Deskripsi">
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