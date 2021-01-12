<?= $this->extend('layout/baseLayout') ?>
<?= $this->section('title') ?>
INFO AKADEMIK
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-9">
            <h3><strong>Judul Event</strong></h3>
            <img src="assets/images/imgP.jpg" class="img-thumbnail" id="imgMain">
            </br>
            </br>
            <div class="boxKeteranganEvent">
                <p><strong>Commite :</strong></p>
                <p><strong>Location :</strong></p>
                <p><strong>Kontak :</strong></p>
                <p><strong>Website :</strong></p>
                <p><strong>Agenda :</strong></p>
            </div>
            </br>
            <p>Deskripsi Event</p>

        </div>
        <div class="col-3">
            <div class="boxBeritaTerkait">
                <p class="txtBeritaTerkait"> Berita Terkait</p>
            </div>
            <div class="boxEventTerkait">
                <p class="deskImgSub"><strong>Judul</strong></p>
                <p class="deskImgSub">Deskipsi</p>
                <p class="deskImgSub">Tanggal</p>
                <hr />
                <p class="deskImgSub"><strong>Judul</strong></p>
                <p class="deskImgSub">Deskipsi</p>
                <p class="deskImgSub">Tanggal</p>
                <hr />
            </div>
        </div>
    </div>
</div>



<?= $this->endSection() ?>