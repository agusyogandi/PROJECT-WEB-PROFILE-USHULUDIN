<?php 
    
  $db      = \Config\Database::connect();
  $builder = $db->table('vidio');
 
  $builder = $db->query("SELECT * FROM vidio WHERE id = $id");
 
  $a=0;
  foreach($builder->getResultArray() as $row):
    $Slug[$a] = $row['Slug'];
    $Jenis[$a] = $row['Vidio'];
    $Judul[$a] = $row['Judul'];
    $Image[$a] = $row['Thumbnail'];
    $Abstrak[$a] = $row['Deskripsi'];
    $Tanggal[$a] = $row['Tanggal_input'];
    $Link[$a] = $row['Link'];
    $a++;
  endforeach;
  $totalData = $a;

  $builder2 = $db->query("SELECT * FROM vidio WHERE id != $id  ORDER BY id DESC");
 
  $b=0;
  foreach($builder2->getResultArray() as $row):
    $idAll[$b] = $row['id'];
    $JudulAll[$b] = $row['Judul'];
    $Judul2All[$b]=substr($JudulAll[$b], 0, 100,);
    $ImageAll[$b] = $row['Thumbnail'];
    $AbstrakAll[$b] = $row['Deskripsi'];
    $Abstrak2All[$b]=substr($AbstrakAll[$b], 0, 100,);
    $LinkAll[$b] = $row['Link'];
    $TanggalAll[$b] = $row['Tanggal_input'];
    $b++;
  endforeach;
  $totalDataAll= $b;
  ?>

<?= $this->extend('layout/baseLayout') ?>
<?= $this->section('title')?>
<?php
for($i=0;$i<$totalData;$i++){  ?>
<?= $Jenis[$i]; ?> | <?= $Slug[$i]; }?>
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
            <h1><strong><?= $Judul[$i]; ?></strong></h1>
            <img src="/assets/imgUpload/<?= $Image[$i]; ?>" class="imgVidio">
            <a href="<?= $Link[$i]; ?>">
                <img src="<?= base_url('assets/images/playBtn.png'); ?>" class="imgBtnVidio">
            </a>
            <br>
            <br>
            <p style="text-align: justify;"><?= $Abstrak[0]; ?></p>
            <p><strong>Tanggal : </strong> <?= $Tanggal[$i]; ?></p>
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

                    <a href="/detailVidio/<?= $idAll[0]; ?>" class="ml-4">
                        <p class="deskImgSub"> <strong><?= $Judul2All[0]; ?></strong>
                        </p>
                    </a>
                    <img src="/assets/imgUpload/<?= $ImageAll[0]; ?>" id="imgSub">
                    <p class="deskImgSub"><?= $Abstrak2All[0]; ?>...</p>
                    <hr />
                    <a href="/detailVidio/<?= $idAll[1]; ?>" class="ml-4">
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


                    <a href="/detailVidio/<?= $idAll[0]; ?>" class="ml-4">
                        <p class="deskImgSub"> <strong><?= $Judul2All[0]; ?></strong>
                        </p>
                    </a>
                    <img src="/assets/imgUpload/<?= $ImageAll[0]; ?>" id="imgSub">
                    <p class="deskImgSub"><?= $Abstrak2All[0]; ?>...</p>
                    <hr />
                    <a href="/detailVidio/<?= $idAll[1]; ?>" class="ml-4">
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

    <?= $this->endSection() ?>