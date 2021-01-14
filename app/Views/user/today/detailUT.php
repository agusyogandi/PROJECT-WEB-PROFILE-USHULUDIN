<?php 
    
  $db      = \Config\Database::connect();
  $builder = $db->table('artikel');
 
  $builder = $db->query("SELECT * FROM artikel WHERE id = $id");
 
  $a=0;
  foreach($builder->getResultArray() as $row):
    $Slug[$a] = $row['Slug'];
    $Judul[$a] = $row['Judul'];
    $Image[$a] = $row['Image'];
    $Abstrak[$a] = $row['Abstrak'];
    $Link[$a] = $row['Link'];
    $Penulis[$a] = $row['Penulis'];
    $Tanggal[$a] = $row['Tanggal'];
    $a++;
  endforeach;
  $totalData = $a;

  date_default_timezone_set('Asia/Jakarta');
  $waktu=date('Y-m-d'); 
  $builder2= $db->query("SELECT * FROM artikel WHERE Tanggal !='$waktu' and id != '$id' ORDER BY id DESC");
  $b=0;
  foreach($builder2->getResultArray() as $row):
    $idAll[$b] = $row['id'];
    $JudulAll[$b] = $row['Judul'];
    $Judul2All[$b]=substr($JudulAll[$b], 0, 100,);
    $ImageAll[$b] = $row['Image'];
    $AbstrakAll[$b] = $row['Abstrak'];
    $Abstrak2All[$b]=substr($AbstrakAll[$b], 0, 100,);
    $LinkAll[$b] = $row['Link'];
    $PenulisAll[$b] = $row['Penulis'];
    $TanggalAll[$b] = $row['Tanggal'];
    $b++;
  endforeach;
  $totalDataAll= $b;
 ?>

<?= $this->extend('layout/baseLayout') ?>
<?= $this->section('title')?>
<?php
for($i=0;$i<$totalData;$i++){  ?>
DETAIL USHULUDIN TODAY | <?= $Slug[$i]; }?>
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
                <p class="txtBeritaTerkait"> Lainnya</p>
                <div class="boxEventTerkait">
                    <?php 
             if($totalDataAll < 2){ 
                for($i=0;$i<$totalDataAll;$i++){ ?>


                    <a href="/detailNews/<?= $idAll[0]; ?>" class="ml-4">
                        <p class="deskImgSub"> <strong><?= $Judul2All[0]; ?></strong>
                        </p>
                    </a>
                    <img src="/assets/imgUpload/<?= $ImageAll[0]; ?>" id="imgSub">
                    <p class="deskImgSub"><?= $Abstrak2All[0]; ?>...</p>
                    <hr />

                    <a href="/detailNews/<?= $idAll[1]; ?>" class="ml-4">
                        <p class="deskImgSub"> <strong><?= $Judul2All[1]; ?></strong>
                        </p>
                    </a>
                    <img src="/assets/imgUpload/<?= $ImageAll[1]; ?>" id="imgSub">
                    <p class="deskImgSub"><?= $Abstrak2All[0]; ?>...</p>
                    <hr />

                    <?php 
                }
            }if($totalDataAll >= 2){
                for($i=0;$i<1;$i++){ ?>

                    <a href="/detailNews/<?= $idAll[0]; ?>" class="ml-4">
                        <p class="deskImgSub"> <strong><?= $Judul2All[0]; ?></strong>
                        </p>
                    </a>
                    <img src="/assets/imgUpload/<?= $ImageAll[0]; ?>" id="imgSub">
                    <p class="deskImgSub"><?= $Abstrak2All[0]; ?>...</p>
                    <hr />

                    <a href="/detailNews/<?= $idAll[1]; ?>" class="ml-4">
                        <p class="deskImgSub"> <strong><?= $Judul2All[1]; ?></strong>
                        </p>
                    </a>
                    <img src="/assets/imgUpload/<?= $ImageAll[1]; ?>" id="imgSub">
                    <p class="deskImgSub"><?= $Abstrak2All[0]; ?>...</p>
                    <hr />

                    <?php 
                }
            }
            else{
            }
            
            ?>
                </div>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>