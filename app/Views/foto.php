<?= $this->extend('layout/baseLayout') ?>
<?= $this->section('title') ?>
FOTO
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-9">
            <h3><strong>Judul Foto</strong></h3>
            <img src="assets/images/imgP.jpg" class="img-thumbnail" id="imgMain">
            <div class="row">
                <div class="col-3">
                    <img src="assets/images/imgK.jpg" id="imgSub">
                    <p class="deskImgSub">Deskipsi</p>
                </div>
                <div class="col-3">
                    <img src="assets/images/imgK.jpg" id="imgSub">
                    <p class="deskImgSub">Deskipsi</p>
                </div>
                <div class="col-3">
                    <img src="assets/images/imgK.jpg" id="imgSub">
                    <p class="deskImgSub">Deskipsi</p>
                </div>
                <div class="col-3">
                    <img src="assets/images/imgK.jpg" id="imgSub">
                    <p class="deskImgSub">Deskipsi</p>
                </div>
            </div>

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