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
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="/assets/images/uin.png">
    <title><?= $this->renderSection('title') ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/dataTables.bootstrap4.min.css'); ?>" />




</head>

<body>
    <!-- nav -->
    <div class="container-fluid">

        <div class="boxHeader">
            <div class="container">
                <div class="row">
                    <div class="col-9">
                        <ul class="nav justify-content-start">
                            <li class="nav-item">
                                <img src="<?= base_url('assets/images/facebook.png'); ?>" class="imgSrc">
                            </li>
                            <li class="nav-item">
                                <img src="<?= base_url('assets/images/twitter.png'); ?>" class="imgSrc">
                            </li>
                            <li class="nav-item">
                                <img src="<?= base_url('assets/images/instagram.png'); ?>" class="imgSrc">
                            </li>
                            <li class="nav-item">
                                <img src="<?= base_url('assets/images/whatsapp.png'); ?>" class="imgSrc">
                            </li>
                            <li class="nav-item">
                                <img src="<?= base_url('assets/images/youtube.png'); ?>" class="imgSrc">
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="textNavBar"><span id="tanggalwaktu"></span></a>
                            </li>

                        </ul>
                    </div>

                    <div class="col-3">
                        <ul class="nav justify-content-end ">
                            <li class="nav-item ">
                                <a class="nav-link" href="/about" id="textNavBar">About</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="/karir" id="textNavBar">Career</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="/kontak" id="textNavBar">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            </br>
            <center>
                <h1 class="display-4" id="txtBanner">RUMAH <strong>MODERERASI BERAGAMA</strong></h1>
                <p class="txtBanner2">Situs Resmi Fakultas Ushuludin Universitas Islam Negeri Sunan Gunung Djati
                    Bandung
                </p>
            </center>


        </div>
        <div class="boxHeader2">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <ul class="nav justify-content-start">
                            <li class="nav-item">
                                <a class="nav-link" href="/" id="textNavBar2">BERANDA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/profil" id="textNavBar2">PROFIL</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/news" id="textNavBar2">NEWS</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="textNavBar2" data-toggle="dropdown">
                                    KARYA ILMIAH
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/karyaIlmiah/artikel">ARTIKEL</a>
                                    <a class="dropdown-item" href="/karyaIlmiah/buku">BUKU</a>
                                    <a class="dropdown-item" href="/karyaIlmiah/jurnal">JURNAL</a>
                                    <a class="dropdown-item" href="/karyaIlmiah/kliping">KLIPING KORAN</a>
                                    <a class="dropdown-item" href="/karyaIlmiah/opini">OPINI</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/infoAkademik" id="textNavBar2">INFO AKADEMIK</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/ushuludinToday" id="textNavBar2">USHULUDIN TODAY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/glosaria" id="textNavBar2">GLOSARIA</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-4">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link" href="/indexAdmin" id="textNavBar2">Login |</a>
                            </li>
                            <li class="nav-item">
                                <i class="fas fa-search" style="color:white;" id="imgSrc2"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <p><img src="<?= base_url('assets/images/news.png'); ?>" class="imgNews"> <strong>BREAKING
                            NEWS</strong></p>
                </div>
                <div class="col-10">
                    <?php for($i=0;$i<1;$i++){ ?>
                    <marquee behavior="" direction=""><?= $JudulBerita[$i]; ?></marquee>
                    <?php } ?>
                </div>
                <!-- <div class="col-2">
                    <p class="text-right"><img src="<?= base_url('assets/images/prevous.png'); ?>" class="imgNews"> <img
                            src="<?= base_url('assets/images/next.png'); ?>" class="imgNews"></p>
                </div> -->
            </div>
        </div>
    </div>

    <?= $this->renderSection('content') ?>



    <!-- footer -->
    </br>
    <div class="footer bg-dark">
        </br>
        </br>
        </br>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h1 class="footerfk">Fakultas</h1>
                    <h1 class="footerushu">Ushuludin</h1>
                    <p class="footerisi">Secara historis, Fakultas Ushuluddin termasuk fakultas yang paling awal
                        berdiri
                        bersamaan dengan
                        didirikannya UIN ( saat itu masih IAIN ) Sunan Gunung Djati Bandung, pada tahun 1968.</p>
                </div>
                <div class="col-4">
                    <h1 class="footerfk">Quick Links</h1>
                    <div class="row">
                        <div class="col-4">
                            <div class="justify-content-start">
                                <p id="qLink">
                                    Portal Sapa
                                </p>
                                <p id="qLink">
                                    Aplikasi Salam
                                </p>
                                <p id="qLink">
                                    E-Learning
                                </p>
                                <p id="qLink">
                                    <a href="/karir">Pusat Karir</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="justify-content-start">
                                <p id="qLink">
                                    Digital Library
                                </p>
                                <p id="qLink">
                                    SIP
                                </p>
                                <p id="qLink">
                                    PDIP
                                </p>
                                <p id="qLink">
                                    Pusat Perpustakaan
                                </p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="justify-content-start">
                                <p id="qLink">
                                    Pusat Bahasa
                                </p>
                                <p id="qLink">
                                    <a href="/karir">Contact US</a>
                                </p>
                                <p id="qLink">
                                    Kemahasiswaan
                                </p>
                                <p id="qLink">
                                    SKPI
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <h1 class="footerfk">Contact Info</h1>
                    <p id="qLink">Gedung Fakultas Ushuluddin Jl. A.H. Nasution No. 105A, Cibiru, Bandung, Jawa
                        Barat,
                        Indonesia</p>
                    <p class="contact"><img src="assets/images/phone.png" class="imgct">
                        1800-2355-2356</p>
                    <p class="contact"><img src="assets/images/email.png" class="imgct">
                        m@uinsgd.ac.id</p>
                </div>
            </div>
        </div>
    </div>
</body>
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
var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
    "Oktober", "Nopember", "Desember");
document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " +
    tahun;
</script>

</html>