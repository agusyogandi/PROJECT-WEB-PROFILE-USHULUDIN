<?= $this->extend('layout/baseLayout') ?>
<?= $this->section('title') ?>
VIDIO
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-9">
            <h3><strong>Judul Vidio</strong></h3>
            <img src="assets/images/imgP.jpg" class="img-thumbnail" id="imgMain">
            </br>
            <p>Deskripsi Vidio</p>
            </br>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                        </div>
                        <div class="col-8">
                            <center>
                                <p class="txtIconDisqus">
                                    <strong>DISQUS</strong>
                                </p>
                            </center>
                        </div>
                        <div class="col-2">
                        </div>
                    </div>
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