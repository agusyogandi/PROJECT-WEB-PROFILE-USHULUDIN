<?php 
    
  $db      = \Config\Database::connect();
  $builder = $db->table('artikel');
 
  $builder = $db->query("SELECT * FROM artikel WHERE id = $id");
 
  $a=0;
  foreach($builder->getResultArray() as $row):

    $Judul[$a] = $row['Judul'];
    $Image[$a] = $row['Image'];
    $Abstrak[$a] = $row['Abstrak'];
    $Link[$a] = $row['Link'];
    $Penulis[$a] = $row['Penulis'];
    $Tanggal[$a] = $row['Tanggal'];
    $a++;
  endforeach;
  $totalData = $a;
 ?>

<?= $this->extend('layout/baseLayout') ?>
<?= $this->section('title') ?>
KARYA ILMIAH
<?= $this->endSection() ?>
<?= $this->section('content') ?>
</br>
</br>
</br>
<div class="container">
    <div class="row">
        <div class="col-9">
            <?php $a=1;
  for($i=0;$i<$totalData;$i++){ ?>
            <h1><strong>"<?= $Judul[$i]; ?>"</strong></h1>
            <img src="/assets/imgUpload/<?= $Image[$i]; ?>" class="img-thumbnail mt-2">
            <br>
            <br>
            <h3><strong>Abstrak :</strong></h3>
            <p style="text-align: justify;"><?= $Abstrak[0]; ?></p>
            <p><strong>Penulis : </strong> <?= $Penulis[$i]; ?></p>
            <p><strong>Tanggal : </strong> <?= $Tanggal[$i]; ?></p>
            <a href="<?= $Link[$i]; ?>" class="btn btn-warning">Download</a>
            <?php } ?>
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