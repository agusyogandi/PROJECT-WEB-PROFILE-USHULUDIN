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
            $Link[$a] = $row['Link'];
            $Penulis[$a] = $row['Penulis'];
            $Tanggal[$a] = $row['Tanggal'];
            $a++;
        endforeach;
        $totalDataKaryaIlmiah = $a;

        //   get data Foto
        $builder = $db->query("SELECT * FROM foto ORDER BY id DESC");
        $b=0;
        foreach($builder->getResultArray() as $row):
            $ImageFoto[$b] = $row['Image'];
            $b++;
        endforeach;
        $totalDataFoto= $b;

        //   get data kabar alumni
        $builder = $db->query("SELECT * FROM vidio WHERE Vidio = 'Kabar Alumni' ORDER BY id DESC");
        $c=0;
        foreach($builder->getResultArray() as $row):
            $JudulKA[$c] = $row['Judul'];
            $ImageKA[$c] = $row['Thumbnail'];
            $c++;
        endforeach;
        $totalDataKA= $c;

            //   get data Vidio 
        $builder = $db->query("SELECT * FROM vidio WHERE Vidio = 'Vidio Fakultas' ORDER BY id DESC");
        $d=0;
        foreach($builder->getResultArray() as $row):
            $JudulVF[$d] = $row['Judul'];
            $ImageVF[$d] = $row['Thumbnail'];
            $d++;
        endforeach;
        $totalDataVF= $d;
    
            //   get data Berita
        $builder = $db->query("SELECT * FROM artikel WHERE Jenis = 'Berita' ORDER BY id DESC");
        $e=0;
        foreach($builder->getResultArray() as $row):
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
        $waktu=date('Y-m-d'); 
        $builder = $db->query("SELECT * FROM artikel WHERE Jenis = 'Inspirasi Pagi' and Tanggal = '$waktu' ORDER BY id DESC");
        $f=0;
        foreach($builder->getResultArray() as $row):
            $idPagi[$f] = $row['id'];
            $JudulPagi[$f] = $row['Judul'];
            $Judul2Pagi[$f]=substr($JudulPagi[$f], 0, 25,);
            $ImagePagi[$f] = $row['Image'];
            $AbstrakPagi[$f] = $row['Abstrak'];
            $Abstrak2Pagi[$f]=substr($AbstrakPagi[$f], 0, 50,);

            $TanggalPagi[$e] = $row['Tanggal'];
        $f++;
        endforeach;
        $totalDataPagi= $f;
            
        // get data Artikel
        $builder = $db->query("SELECT * FROM artikel  ORDER BY id DESC");
        $g=0;
        foreach($builder->getResultArray() as $row):
            $idAll[$g] = $row['id'];
            $JudulAll[$g] = $row['Judul'];
            $Judul2All[$g]=substr($JudulAll[$g], 0, 25,);
            $ImageAll[$g] = $row['Image'];
            $AbstrakAll[$g] = $row['Abstrak'];
            $Abstrak2All[$g]=substr($AbstrakAll[$g], 0, 50,);

            $TanggalAll[$g] = $row['Tanggal'];
        $g++;
        endforeach;
        $totalDataAll= $g;

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
                    <h1 class="DeskMain"><span class="badge badge-info"><?= $JudulAll[$i]; ?></span></h1>

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
                            <img src="assets/imgUpload/<?= $ImageAll[$i]; ?>" id="imgSub">
                            <p class="deskImgSub"><?= $JudulAll[$i]; ?></p>
                        </div>

                        <?php 
                            }
                        }if($totalDataAll >= 4){
                            for($i=1;$i<5;$i++){ ?>

                        <div class="col-3">
                            <img src="assets/imgUpload/<?= $ImageAll[$i]; ?>" id="imgSub">
                            <p class="deskImgSub"><?= $JudulAll[$i]; ?></p>

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
                        <h3><strong>Inspirasi Pagi</strong></h3>
                        <hr />
                        <?php 
                        
                        if($totalDataPagi < 2){ 
                            for($i=0;$i<$totalDataPagi;$i++){ ?>

                        <img src="assets/imgUpload/<?= $ImagePagi[$i]; ?>" id="imgMainWin">
                        <strong>
                            <p class="deskImgWin"><?= $JudulPagi[$i]; ?>
                            <p>
                        </strong>
                        </br>

                        <?php 
                            }
                        }if($totalDataPagi >= 2){
                            for($i=0;$i<2;$i++){ ?>

                        <img src="assets/imgUpload/<?= $ImagePagi[$i]; ?>" id="imgMainWin">
                        <strong>
                            <p class="deskImgWin"><?= $JudulPagi[$i]; ?>
                            <p>
                        </strong>
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
                                <strong>Galery Foto</strong>
                            </li>
                        </ul>
                    </div>

                    <div class="col-6">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <strong> <a href="/foto">Lihat Semua Foto..</a></strong>
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
                        <strong>Artikel & Opini</strong>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <strong> <a href="/karyaIlmiah">Lihat Semua Artikel..</a></strong>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <?php
            
            if($totalDataKaryaIlmiah < 8){ 
                for($i=0;$i<$totalDataKaryaIlmiah;$i++){ ?>

            <div class="col-3 mt-2">
                <img src="assets/imgUpload/<?= $Image[$i]; ?>" width="130px" height="150px">
                <h2 class="headArtikel"> <?= $Judul2[$i]; ?></h2>
                <font style="font-size: 15px; color:black;"><?= $Tanggal[$i]; ?></font><br>
                <a href="/detail_karyaIlmiah/<?= $id[$i]; ?>" class="mb-2">
                    <font style="font-size: 13px; font-style:italic; color:blue;">Read More</font>
                </a>
                <hr>
            </div>

            <?php 
                }
            }if($totalDataKaryaIlmiah >= 8){
                for($i=0;$i<8;$i++){ ?>

            <div class="col-3 mt-2">
                <img src="assets/imgUpload/<?= $Image[$i]; ?>" width="130px" height="150px">
                <h2 class="headArtikel"> <?= $Judul2[$i]; ?></h2>
                <font style="font-size: 15px; color:black;"><?= $Tanggal[$i]; ?></font><br>
                <a href="/detail_karyaIlmiah/<?= $id[$i]; ?>" class="mb-2">
                    <font style="font-size: 13px; font-style:italic; color:blue;">Read More</font>
                </a>
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
<div class="container-flui">
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
                        <strong> Semua Event..</strong>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </br>
    <div class="row">
        <div class="col-2">
            <center><img src="assets/images/prevous.png" id="imgSlideIcon"></center>
        </div>
        <div class="col-8">
            <div class="row">

                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <center>
                                <p class="tglSubBeritaTerbaru">Tanggal</p>

                                <p class="deskSubBeritaTerbaru">Deskripsi
                                <p>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <center>
                                <p class="tglSubBeritaTerbaru">Tanggal</p>

                                <p class="deskSubBeritaTerbaru">Deskripsi
                                <p>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <center>
                                <p class="tglSubBeritaTerbaru">Tanggal</p>

                                <p class="deskSubBeritaTerbaru">Deskripsi
                                <p>
                            </center>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="col-2">
            <center><img src="assets/images/next.png" id="imgSlideIcon"></center>
        </div>
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
                                <strong>Berita Terbaru</strong>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <strong> Lihat Semua Berita..</strong>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php 
                
                if($totalDataBerita >= 1){
                    for($i=0;$i<1;$i++){ ?>
                <strong>
                    <p class="headBeritaTerbaru"><?= $JudulBerita[$i]; ?>
                    </p>
                </strong>
                <img src="assets/imgUpload/<?= $ImageBerita[$i]; ?>" id="imgBeritaTerbaru">
                <p style="text-align: justify;" class="mt-4"><?= $AbstrakBerita[$i]; ?></p>
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
                        <p class="headBeritaTerbaru"><?= $TanggalBerita[$i]; ?>
                            <strong>
                                <p class="headBeritaTerbaru"><?= $JudulBerita[$i]; ?>
                            </strong>
                        <p class="headBeritaTerbaru"><?= $Abstrak2Berita[$i]; ?>
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
                        <p class="headBeritaTerbaru"><?= $TanggalBerita[$i]; ?>
                            <strong>
                                <p class="headBeritaTerbaru"><?= $JudulBerita[$i]; ?>
                            </strong>
                        <p class="headBeritaTerbaru"><?= $Abstrak2Berita[$i]; ?>
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
                                <strong> <a href="/vidio">Lihat Semua Vidio..</a></strong>
                            </li>
                        </ul>
                    </div>
                </div>
                </br>

                <?php
                if($totalDataKA >= 1){
                    for($i=0;$i<1;$i++){ ?>
                <img src="assets/imgUpload/<?= $ImageKA[$i]; ?>" id="imgSubBeritaTerbaru">
                <strong>
                    <p class="deskSubBeritaTerbaru"><?= $JudulKA[$i]; ?>
                    <p>
                </strong>
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
                                <strong> <a href="/vidio">Lihat Semua Vidio..</a></strong>
                            </li>
                        </ul>
                    </div>
                </div>
                </br>

                <?php
                
                
                if($totalDataVF < 2){ 
                    for($i=0;$i<$totalDataVF;$i++){ ?>

                <img src="assets/imgUpload/<?= $ImageVF[$i]; ?>" id="imgSubBeritaTerbaru">
                <strong>
                    <p class="deskSubBeritaTerbaru"><?= $JudulVF[$i]; ?>
                    <p>
                </strong>
                </br>

                <?php 
                    }
                }if($totalDataVF >= 2){
                    for($i=0;$i<2;$i++){ ?>

                <img src="assets/imgUpload/<?= $ImageVF[$i]; ?>" id="imgSubBeritaTerbaru">
                <strong>
                    <p class="deskSubBeritaTerbaru"><?= $JudulVF[$i]; ?>
                    <p>
                </strong>
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
                    <p id="txtIsisSt"> Jumlah visitor : </p>
                    <p id="txtIsisSt"> Jumlah visitor Hari ini : </p>
                    <p id="txtIsisSt"> Kunjungan Perbulan : </p>
                    <p id="txtIsisSt"> Sedang Online : </p>
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