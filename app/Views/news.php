<?= $this->extend('layout/baseLayout') ?>
<?= $this->section('title') ?>
NEWS
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-9">
            <h3><strong>Judul Berita </strong></h3>
            <img src="assets/images/imgP.jpg" class="img-thumbnail" id="imgMain">
            <p>isi berita</p>
            </br>
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

                <img src="assets/images/imgK.jpg" id="imgSub">
                <p class="deskImgSub">Deskipsi</p>

                <img src="assets/images/imgK.jpg" id="imgSub">
                <p class="deskImgSub">Deskipsi</p>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>