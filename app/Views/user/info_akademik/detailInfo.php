<?php 
    
  $db      = \Config\Database::connect();
  $builder = $db->table('event');
 
  $builder = $db->query("SELECT * FROM event WHERE id = '$id' ORDER BY id DESC");
  $a=0;
  foreach($builder->getResultArray() as $row):
    $id[$a] = $row['id'];
    $Judul[$a] = $row['Judul'];
    $Slug[$a] = $row['Slug'];
    $Image[$a] = $row['Image'];
    $Abstrak[$a] = $row['Deskripsi'];
    $Abstrak2[$a]=substr($Abstrak[$a], 0, 200,);
    $Link[$a] = $row['Link'];
    $Komite[$a] = $row['Komite'];
    $Lokasi[$a] = $row['Lokasi'];
    $Kontak[$a] = $row['Kontak'];
    $Tanggal_input[$a] = $row['Tanggal_input'];
    $Tanggal_update[$a] = $row['Tanggal_update'];
    $Tanggal_mulai[$a] = $row['Tanggal_mulai'];
    $Tanggal_selesai[$a] = $row['Tanggal_selesai'];
    $a++;
  endforeach;
  $totalData= $a;
  
  $builder2= $db->query("SELECT * FROM artikel WHERE Jenis != 'Artikel' and id != '$id' ORDER BY id DESC");
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
EVENT | <?= $Slug[$i]; }?>
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

            <h3><strong><?= $Judul[$i]; ?></strong></h3>
            <img src="/assets/imgUpload/<?= $Image[$i]; ?>" class="img-thumbnail" width="100%">
            </br>
            </br>
            <div class="boxKeteranganEvent">
                <p><strong>Commite : </strong><?= $Komite[$i]; ?></p>
                <p><strong>Location : </strong><?= $Lokasi[$i]; ?></p>
                <p><strong>Kontak : </strong><?= $Kontak[$i]; ?></p>
                <p><strong>Website : </strong><a href="<?= $Link[$i]; ?>"><?= $Link[$i]; ?></a></p>
                <p><strong>Agenda : </strong><?= $Tanggal_mulai[$i]; ?> - <?= $Tanggal_selesai[$i]; ?></p>
            </div>
            </br>
            <p><?= $Abstrak[$i]; ?></p>

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