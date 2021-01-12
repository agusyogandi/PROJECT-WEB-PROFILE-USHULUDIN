<?php 

  $db      = \Config\Database::connect();
  $builder = $db->table('artikel');
  $builder = $db->query("SELECT * FROM artikel WHERE Jenis = 'Jurnal' ORDER BY id DESC");
  $a=0;
  foreach($builder->getResultArray() as $row):
    $id[$a] = $row['id'];
    $Judul[$a] = $row['Judul'];
    $Image[$a] = $row['Image'];
    $Abstrak[$a] = $row['Abstrak'];
    $Link[$a] = $row['Link'];
    $Penulis[$a] = $row['Penulis'];
    $Tanggal[$a] = $row['Tanggal'];
    $a++;
  endforeach;
  $totalData= $a;
 ?>

<?= $this->extend('layout/baseLayout') ?>
<?= $this->section('title') ?>
KARYA ILMIAH | JURNAL
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-9">
            <table class="table table-borderless">
                <tbody>
                    <?php 
                        $i=0;
                        for($i=0;$i<$totalData;$i++){
                    ?>
                    <tr>
                        <td width="20%"> <img src="/assets/imgUpload/<?= $Image[$i]; ?>" data-toggle="modal"
                                data-target="#imgDetail" id=imgKarya />

                            <a href="/detail_karyaIlmiah/<?= $id[$i]; ?>"
                                class="btn btn-primary btn-block mt-2">Detail</a>
                        </td>
                        <td>
                            <p><strong><?= $Judul[$i]; ?></strong></p>
                            <p><?= $Tanggal[$i]; ?></p>
                            <p style="text-align: justify;"><?= $Abstrak[$i]; ?></p>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
            </ul>

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