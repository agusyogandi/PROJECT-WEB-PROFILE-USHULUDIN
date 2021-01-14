<?php 
  $db      = \Config\Database::connect();
  $builder = $db->table('artikel');

        //   get data artikel / karya ilmiah
        $builder = $db->query("SELECT * FROM artikel WHERE Jenis IN ('Artikel','Opini') ORDER BY id DESC");
        $a=0;
        foreach($builder->getResultArray() as $row):
            $id[$a] = $row['id'];
            $Judul[$a] = $row['Judul'];
            $Judul2[$a]=substr($Judul[$a], 0, 20,);
            $Image[$a] = $row['Image'];
            $Abstrak[$a] = $row['Abstrak'];
            $Abstrak2[$a]=substr($Abstrak[$a], 0, 50,);
            $Link[$a] = $row['Link'];
            $Penulis[$a] = $row['Penulis'];
            $Tanggal[$a] = $row['Tanggal'];
            $a++;
        endforeach;
        $totalDataKaryaIlmiah = $a;

        //   get data Foto
        $builder2 = $db->query("SELECT * FROM foto ORDER BY id DESC");
        $b=0;
        foreach($builder2->getResultArray() as $row):
            $idFoto[$b] = $row['id'];
            $ImageFoto[$b] = $row['Image'];
            $b++;
        endforeach;
        $totalDataFoto= $b;

        //   get data kabar alumni
        $builder3 = $db->query("SELECT * FROM vidio WHERE Vidio = 'Kabar Alumni' ORDER BY id DESC");
        $c=0;
        foreach($builder3->getResultArray() as $row):
            $idKA[$c] = $row['id'];
            $JudulKA[$c] = $row['Judul'];
            $ImageKA[$c] = $row['Thumbnail'];
            $c++;
        endforeach;
        $totalDataKA= $c;

            //   get data Vidio 
        $builder4 = $db->query("SELECT * FROM vidio WHERE Vidio = 'Vidio Fakultas' ORDER BY id DESC");
        $d=0;
        foreach($builder4->getResultArray() as $row):
            $idVF[$d] = $row['id'];
            $JudulVF[$d] = $row['Judul'];
            $ImageVF[$d] = $row['Thumbnail'];
            $d++;
        endforeach;
        $totalDataVF= $d;
    
            //   get data Berita
        $builder5 = $db->query("SELECT * FROM artikel WHERE Jenis = 'Berita' ORDER BY id DESC");
        $e=0;
        foreach($builder5->getResultArray() as $row):
            $idBerita[$e] = $row['id'];
            $JudulBerita[$e] = $row['Judul'];
            $Judul2Berita[$e]=substr($JudulBerita[$e], 0, 25,);
            $ImageBerita[$e] = $row['Image'];
            $AbstrakBerita[$e] = $row['Abstrak'];
            $Abstrak2Berita[$e]=substr($AbstrakBerita[$e], 0, 50,);
            $LinkBerita[$e] = $row['Link'];
            $PenulisBerita[$e] = $row['Penulis'];
            $TanggalBerita[$e] = $row['Tanggal'];
        $e++;
        endforeach;
        $totalDataBerita= $e;

        //   get data Inpirasi
        date_default_timezone_set('Asia/Jakarta');
        $waktu=date('Y-m-d'); 
        
        $builder6 = $db->query("SELECT * FROM artikel WHERE Jenis = 'Inspirasi Pagi' and Tanggal = '$waktu' ORDER BY id DESC");
        $f=0;
        foreach($builder6->getResultArray() as $row):
            $idPagi[$f] = $row['id'];
            $JudulPagi[$f] = $row['Judul'];
            $Judul2Pagi[$f]=substr($JudulPagi[$f], 0, 25,);
            $ImagePagi[$f] = $row['Image'];
            $AbstrakPagi[$f] = $row['Abstrak'];
            $Abstrak2Pagi[$f]=substr($AbstrakPagi[$f], 0, 73,);

            $TanggalPagi[$e] = $row['Tanggal'];
        $f++;
        endforeach;
        $totalDataPagi= $f;
            
        // get data Artikel
        $builder7 = $db->query("SELECT * FROM artikel  ORDER BY id DESC");
        $g=0;
        foreach($builder7->getResultArray() as $row):
            $idAll[$g] = $row['id'];
            $JudulAll[$g] = $row['Judul'];
            $Judul2All[$g]=substr($JudulAll[$g], 0, 45,);
            $Judul3All[$g]=substr($JudulAll[$g], 45, 85,);
            $ImageAll[$g] = $row['Image'];
            $AbstrakAll[$g] = $row['Abstrak'];
            $Abstrak2All[$g]=substr($AbstrakAll[$g], 0, 45,);

            $TanggalAll[$g] = $row['Tanggal'];
        $g++;
        endforeach;
        $totalDataAll= $g;

        // get data Event
        $builder7 = $db->query("SELECT * FROM event  ORDER BY id DESC");
        $h=0;
        foreach($builder7->getResultArray() as $row):
            $idEvent[$h] = $row['id'];
            $judulEvent[$h] = $row['Judul'];
            $judulEvent2[$h]=substr($judulEvent[$h], 0, 45,);
            $Tanggal_mulaiEvent[$h] = $row['Tanggal_mulai'];
            $Tanggal_selesaiEvent[$h] = $row['Tanggal_selesai'];
          
            $deskripsiEvent[$h] = $row['Deskripsi'];
            $deskripsiEvent2[$h]=substr($deskripsiEvent[$h], 0, 45,);


        $h++;
        endforeach;
        $totalDataEvent= $h;

 ?>

<?= $this->extend('layout/baseLayout') ?>
<?= $this->section('title') ?>
BERANDA
<?= $this->endSection() ?>

<?= $this->section('content') ?>




<!-- Box main -->
<div class="container-fluid">
    <div class="boxMain">
        <div class="container"></br>
            <div class="row">
                <div class="col-9">

                    <?php 

                    if($totalDataAll >= 1){
                        for($i=0;$i<1;$i++){ ?>
                    <img src="assets/imgUpload/<?= $ImageAll[$i]; ?>" class="img-thumbnail" id="imgMain">
                    <a href="/detailNews/<?= $idAll[$i]; ?>">
                        <h1 class="DeskMain"><span
                                class="badge badge-info"><?= $Judul2All[$i]; ?><br><?= $Judul3All[$i]; ?></span></h1>
                    </a>

                    <?php 
                        }
                    } else {
                        for($i=0;$i<1;$i++){ ?>
                    <img src="assets/images/imgP.png" class="img-thumbnail" id="imgMain">
                    <h1 class="DeskMain"><span class="badge badge-info">Belum Ada Data</span></h1>

                    <?php 
                        }
                    } 
                    
                    ?>

                    <div class="row">
                        <?php 

                        if($totalDataAll < 4){ 
                            for($i=1;$i<$totalDataAll;$i++){ ?>

                        <div class="col-3">
                            <a href="/detailNews/<?= $idAll[$i]; ?> " style="color: black;">
                                <img src="assets/imgUpload/<?= $ImageAll[$i]; ?>" id="imgSub">
                                <p class="deskImgSub"><?= $Abstrak2All[$i]; ?>...</p>
                            </a>
                        </div>

                        <?php 
                            }
                        }if($totalDataAll >= 4){
                            for($i=1;$i<5;$i++){ ?>

                        <div class="col-3">
                            <a href="/detailNews/<?= $idAll[$i]; ?>" style="color: black;">
                                <img src="assets/imgUpload/<?= $ImageAll[$i]; ?>" id="imgSub">
                                <p style="color: black;" class="deskImgSub"><?= $Abstrak2All[$i]; ?>...</p>
                            </a>
                        </div>

                        <?php 
                            }
                        }
                        else{
                            }
                            
                        ?>
                    </div>
                </div>
                <div class="col-3">
                    <div class="window">
                        <h5><strong>Inspirasi Pagi</strong></h5>
                        <hr />
                        <?php 
                        
                        if($totalDataPagi < 2){ 
                            for($i=0;$i<$totalDataPagi;$i++){ ?>
                        <a href="/detailNews/<?= $idPagi[$i]; ?>" style="color: black;">
                            <img src="assets/imgUpload/<?= $ImagePagi[$i]; ?>" id="imgMainWin">
                            <p class="deskImgWin"><?= $Abstrak2Pagi[$i]; ?>...
                            </p>
                        </a>
                        </br>

                        <?php 
                            }
                        }if($totalDataPagi >= 2){
                            for($i=0;$i<2;$i++){ ?>
                        <a href="/detailNews/<?= $idPagi[$i]; ?>" style="color: black;">
                            <img src="assets/imgUpload/<?= $ImagePagi[$i]; ?>" id="imgMainWin">
                            <p class="deskImgWin"><?= $Abstrak2Pagi[$i]; ?>...
                            </p>
                        </a>
                        </br>

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

    <!-- galery -->
    <div class="container">
        </br>
        <hr />
        <div class="row">
            <div class="col-9">


                <div class="row">
                    <div class="col-6">
                        <ul class="nav justify-content-start">
                            <li class="nav-item">
                                <h5>
                                    <strong>Galery Foto</strong>
                                </h5>
                            </li>
                        </ul>
                    </div>

                    <div class="col-6">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a href="/foto">Lihat Semua Foto..</a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="row">
                    <?php 

                    if($totalDataFoto < 3){ 
                        for($i=0;$i<$totalDataFoto;$i++){ ?>

                    <div class="col-4 mt-2">
                        <img src="assets/imgUpload/<?= $ImageFoto[$i]; ?>" id="imgGal">


                    </div>

                    <?php 
                        }
                    }if($totalDataFoto >= 3){
                        for($i=0;$i<3;$i++){ ?>

                    <div class="col-4 mt-2">

                        <img src="assets/imgUpload/<?= $ImageFoto[$i]; ?>" id="imgGal">


                    </div>

                    <?php 
                        }
                    }
                    else{
                        }

                   ?>

                </div>

            </div>

            <!-- quotes -->
            <div class="col-3">
                <h1 class="petik">"</h1>
                <p class="quotes">Nilai Nilai inti Leadership, service dan Collaboration. Nilai konkrit yang
                    melandasi mengoprasikan, dan memelihara aktivitas kunci untuk mencapai tujuan bersama.</p>
            </div>
        </div>
    </div>

    <!-- artikel -->
    <div class="container">
        </br>
        <hr />
        <div class="row">
            <div class="col-6">
                <ul class="nav justify-content-start">
                    <li class="nav-item">
                        <h5>
                            <strong>Artikel & Opini</strong>
                        </h5>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a href="/karyaIlmiah">Lihat Semua Artikel..</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <?php
            
            if($totalDataKaryaIlmiah < 8){ 
                for($i=0;$i<$totalDataKaryaIlmiah;$i++){ ?>

            <div class="col-3 mt-2">
                <a href="/detailNews/<?= $id[$i]; ?>" style="color: black;">
                    <strong>
                        <p style="color: black;"> <?= $Judul2[$i]; ?></p>
                    </strong>
                </a>
                <font style="font-size: 15px; color:black;"><?= $Abstrak2[$i]; ?>...</font><br>
                <font style="font-size: 15px; color:black;"><?= $Tanggal[$i]; ?></font><br>

                <hr>
            </div>

            <?php 
                }
            }if($totalDataKaryaIlmiah >= 8){
                for($i=0;$i<8;$i++){ ?>

            <div class="col-3 mt-2">
                <a href="/detailNews/<?= $id[$i]; ?>" style="color: black;">
                    <strong>
                        <p style="color: black;"> <?= $Judul2[$i]; ?></p>
                    </strong>
                </a>
                <font style="font-size: 15px; color:black;"><?= $Abstrak2[$i]; ?>...</font><br>
                <font style="font-size: 15px; color:black;"><?= $Tanggal[$i]; ?></font><br>

                <hr>
            </div>

            <?php 
                }
            }
            else{
            }
                        
            ?>
        </div>
    </div>
</div>

<!-- kalender -->
<div class="container-fluid">
    <div class="container">
        <hr />
        <div class="row">
            <div class="col-6">
                <ul class="nav justify-content-start">
                    <li class="nav-item">
                        <strong>Kalender Akademik</strong>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a href="/infoAkademik">Lihat Semua Event..</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </br>
</div>
<div class="container-fluid">

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul> -->

        <!-- The slideshow -->
        <div class="carousel-inner">
            <?php 
            for($i=0;$i<$totalDataEvent;$i++){?>
            <div class="<?php if($i==0){echo("carousel-item active");} else {
                    echo("carousel-item");
                } ?>">
                <center>
                    <button type="button" class="btn btn-outline-secondary btn-lg">
                        <h1><?= $judulEvent[$i]; ?></h1>
                        <h5><?= $Tanggal_mulaiEvent[$i]; ?> - <?= $Tanggal_selesaiEvent[$i]; ?></h5>
                        <p style="color: blue;"><?= $deskripsiEvent2[$i]; ?>...</p>
                    </button>
                </center>

            </div>
            <?php }  ?>

        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <img src="assets/images/prevous.png" alt="" width="70px" height="70px" class="mr-4">
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <img src="assets/images/next.png" alt="" width="70px" height="70px" class="ml-4">
        </a>

    </div>
</div>



</br>


<div class="container-fluid">
    <!-- all -->
    <div class="container">
        <hr />
        <div class="row">
            <!-- berita terbaru -->
            <div class="col-8">
                <div class="row">
                    <div class="col-6">
                        <ul class="nav justify-content-start">
                            <li class="nav-item">
                                <h5>
                                    <strong>Berita Terbaru</strong>
                                </h5>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a href="/news">Lihat Semua Berita..</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php 
                
                if($totalDataBerita >= 1){
                    for($i=0;$i<1;$i++){ ?>
                <a href="/detailNews/<?= $idBerita[$i]; ?>" style="color: black;">
                    <strong>
                        <h4 style="color: black;"><?= $JudulBerita[$i]; ?>
                        </h4>
                    </strong>
                </a>
                <img src="assets/imgUpload/<?= $ImageBerita[$i]; ?>" id="imgBeritaTerbaru">
                <p style="text-align: justify;" class="mt-4"><?= $AbstrakBerita[$i]; ?>...</p>
                <?php 
                    }
                } else {
                    for($i=0;$i<1;$i++){ ?>
                <p style="text-align: justify;" class="mt-4">Belum Ada Data</p>

                <?php 
                    }
                } 
                  
                ?>
                <hr />


                <?php 
                
                if($totalDataBerita < 3){ 
                    for($i=1;$i<$totalDataBerita;$i++){ ?>

                <div class="row">
                    <div class="col-6">
                        <img src="assets/imgUpload/<?= $ImageBerita[$i]; ?>" id="imgSubBeritaTerbaru">
                    </div>
                    <div class="col-6">
                        <p><?= $TanggalBerita[$i]; ?></p>
                        <a href="/detailNews/<?= $idBerita[$i]; ?>" style="color: black;">
                            <strong>
                                <p><?= $JudulBerita[$i]; ?></p>
                            </strong>
                        </a>
                        <p><?= $Abstrak2Berita[$i]; ?>...</p>
                    </div>
                </div>

                <?php 
                    }
                }if($totalDataBerita >= 3){
                    for($i=1;$i<4;$i++){ ?>

                <div class="row">
                    <div class="col-6">
                        <img src="assets/imgUpload/<?= $ImageBerita[$i]; ?>" id="imgSubBeritaTerbaru">
                    </div>
                    <div class="col-6">
                        <p class="headBeritaTerbaru"><?= $TanggalBerita[$i]; ?></p>
                        <a href="/detailNews/<?= $idBerita[$i]; ?>" style="color: black;">
                            <strong>
                                <p style="color: black;" class="headBeritaTerbaru"><?= $JudulBerita[$i]; ?></p>
                            </strong>
                        </a>
                        <p class="headBeritaTerbaru"><?= $Abstrak2Berita[$i]; ?>...</p>
                    </div>
                </div>

                <?php 
                    }
                }
                else{
                }

                ?>
            </div>

            <!-- kabar alumni -->
            <div class="col-4">
                <div class="row">
                    <div class="col-6">
                        <ul class="nav justify-content-start">
                            <li class="nav-item">
                                <strong>Kabar Alumni</strong>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a href="/vidioKA">Lihat Semua Vidio..</a>
                            </li>
                        </ul>
                    </div>
                </div>
                </br>

                <?php
                if($totalDataKA >= 1){
                    for($i=0;$i<1;$i++){ ?>
                <img src="assets/imgUpload/<?= $ImageKA[$i]; ?>" id="imgSubBeritaTerbaru">
                <a href="/detailVidio/<?= $idKA[$i]; ?>" style="color: black;">
                    <strong>
                        <p style="color: black;" class="mt-4"><?= $JudulKA[$i]; ?>
                        <p>
                    </strong>
                </a>
                <?php 
                    }
                } else {
                    for($i=0;$i<1;$i++){ ?>
                <p style="text-align: justify;" class="mt-4">Belum Ada Data</p>

                <?php 
                    }
                } 

                ?>
                <hr />
                <!-- vidio kita -->
                <div class="row">

                    <div class="col-6">
                        <ul class="nav justify-content-start">
                            <li class="nav-item">
                                <strong>Vidio Kita</strong>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a href="/vidioFK">Lihat Semua Vidio..</a>
                            </li>
                        </ul>
                    </div>
                </div>
                </br>

                <?php
                
                
                if($totalDataVF < 2){ 
                    for($i=0;$i<$totalDataVF;$i++){ ?>

                <img src="assets/imgUpload/<?= $ImageVF[$i]; ?>" id="imgSubBeritaTerbaru">
                <a href="/detailVidio/<?= $idVF[$i]; ?>" style="color: black;">
                    <strong>
                        <p style="color: black;" class="mt-4"><?= $JudulVF[$i]; ?>
                        </p>
                    </strong>
                </a>
                </br>

                <?php 
                    }
                }if($totalDataVF >= 2){
                    for($i=0;$i<2;$i++){ ?>

                <img src="assets/imgUpload/<?= $ImageVF[$i]; ?>" id="imgSubBeritaTerbaru">
                <a href="/detailVidio/<?= $idVF[$i]; ?>" style="color: black;">
                    <strong>
                        <p style="color: black;" class="mt-4"><?= $JudulVF[$i]; ?>
                        </p>
                    </strong>
                </a>
                </br>

                <?php 
                    }
                }
                else{
                }
                
                ?>
                <hr />


                <div class="boxActivity">
                    <h1 class="txtHeadSt"> Statistik Pengunjung</h1></br>
                    <p id="txtIsisSt"> Jumlah visitor : <?php echo $totalpengunjung ?> </p>
                    <p id="txtIsisSt"> Jumlah visitor Hari ini : <?php echo $pengunjunghariini ?> </p>
                    <p id="txtIsisSt"> Sedang Online : <?php echo $pengunjungonline ?> </p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
var tw = new Date();
if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
else(a = tw.getTime());
tw.setTime(a);
var tahun = tw.getFullYear();
var hari = tw.getDay();
var bulan = tw.getMonth();
var tanggal = tw.getDate();
var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
var bulanarray = new Array("01", "02", "03", "04", "05", "06", "07", "08", "09",
    "10", "11", "12");
// document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " +
//     tahun;
document.getElementById("tanggal").innerHTML = tahun + "-" + bulanarray[bulan] + "-" + tanggal;
</script>

<?= $this->endSection() ?>