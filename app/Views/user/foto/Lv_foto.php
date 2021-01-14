<?php 

  $db      = \Config\Database::connect();
  $builder = $db->table('artikel');
  $builder = $db->query("SELECT * FROM foto ORDER BY id DESC");
  $a=0;
  foreach($builder->getResultArray() as $row):
    $id[$a] = $row['id'];
    $Judul[$a] = $row['Judul'];
    $Image[$a] = $row['Image'];
    $Abstrak[$a] = $row['Deskripsi'];
    $Tanggal[$a] = $row['Tanggal_input'];
    $a++;
  endforeach;
  $totalData= $a;

  $builder2= $db->query("SELECT * FROM artikel ORDER BY id DESC");
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
<?= $this->section('title') ?>
FOTO
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-9">
            <section class="slider">
                <div id="slider" class="flexslider">
                    <ul class="slides"><?php
                    for($i=0;$i<$totalData;$i++){?>
                        <li>
                            <h2><?= $Judul[$i]; ?></h2>
                            <img src="assets/imgUpload/<?= $Image[$i]; ?>" style="width: 100%; height: 500px" />
                            <p style="text-align: justify;"><?= $Abstrak[$i]; ?></p>
                        </li>
                        <?php } ?>
                    </ul>
                </div>

                <div id="carousel" class="flexslider">
                    <ul class="slides"><?php
                    for($i=0;$i<$totalData;$i++){?>
                        <li>
                            <img src="assets/imgUpload/<?= $Image[$i]; ?>" style="width: 100%; height: 150px" />
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </section>
            <script>
            $(document).ready(function() {
                $('#carousel').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    slideshow: false,
                    itemWidth: 210,
                    itemMargin: 5,
                    asNavFor: '#slider'
                });
                $('#slider').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    slideshow: false,
                    sync: "#carousel",
                    start: function(slider) {
                        $('body').removeClass('loading');
                    }
                });

            });
            </script>

        </div>
        <div class="col-3">
            <div class="boxBeritaTerkait">
                <p class="txtBeritaTerkait"> Lainnya</p>
            </div>
            <div class="boxEventTerkait">
                <?php 
             if($totalDataAll < 2){ 
                for($i=0;$i<$totalDataAll;$i++){ ?>

                <a href="/detailNews/<?= $idAll[0]; ?>" class="ml-4">
                    <p class="deskImgSub"> <strong><?= $Judul2All[0]; ?></strong>
                    </p>
                </a>
                <p class="deskImgSub"><?= $Abstrak2All[0]; ?>...</p>
                <p class="deskImgSub"><?= $TanggalAll[0]; ?></p>
                <hr />
                <a href="/detailNews/<?= $idAll[1]; ?>" class="ml-4">
                    <p class="deskImgSub"> <strong><?= $Judul2All[1]; ?></strong>
                    </p>
                </a>
                <p class="deskImgSub"><?= $Abstrak2All[1]; ?>...</p>
                <p class="deskImgSub"><?= $TanggalAll[1]; ?></p>
                <hr />

                <?php 
                }
            }if($totalDataAll >= 2){
                for($i=0;$i<1;$i++){ ?>

                <a href="/detailNews/<?= $idAll[0]; ?>" class="ml-4">
                    <p class="deskImgSub"> <strong><?= $Judul2All[0]; ?></strong>
                    </p>
                </a>
                <p class="deskImgSub"><?= $Abstrak2All[0]; ?>...</p>
                <p class="deskImgSub"><?= $TanggalAll[0]; ?></p>
                <hr />
                <a href="/detailNews/<?= $idAll[1]; ?>" class="ml-4">
                    <p class="deskImgSub"> <strong><?= $Judul2All[1]; ?></strong>
                    </p>
                </a>
                <p class="deskImgSub"><?= $Abstrak2All[1]; ?>...</p>
                <p class="deskImgSub"><?= $TanggalAll[1]; ?></p>
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







<!-- 
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">


                <ol class="carousel-indicators ">
                <?php 
        for($i=0; $i<5;$i++){
            ?>
                    <button class="btn-btn-light" data-target="#carouselExampleIndicators" data-slide-to="<?= $i; ?>">
                        <img src="assets/imgUpload/<?= $Image[$i]; ?>" width="130px" height="110px"
                            class="btn-btn light"></button>
                    <?php
         
        }?>
                </ol>
                <div class="carousel-inner">
                    <?php
          if($totalData > 0){
           for($i=0;$i<$totalData;$i++){
            if($id[$i] == 1){
              echo'<div class="carousel-item active">';}else{echo'<div class="carousel-item">';}
              ?>
                    <div class="carousel-caption">
                        <h3><?= $Judul[$i]; ?></h3>

                    </div>
                    <img src="assets/imgUpload/<?= $Image[$i]; ?>" alt="<?= $Judul[$i]; ?>" width="100%" height="500px">

                </div>
                <?php } }?>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
 -->