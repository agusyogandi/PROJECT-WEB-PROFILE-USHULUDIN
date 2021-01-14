<?php 

  $db      = \Config\Database::connect();
  $builder = $db->table('artikel');
  $builder = $db->query("SELECT * FROM artikel WHERE Jenis = 'Artikel' ORDER BY id DESC");
  $a=0;
  foreach($builder->getResultArray() as $row):
    $id[$a] = $row['id'];
    $Judul[$a] = $row['Judul'];
    $Image[$a] = $row['Image'];
    $Abstrak[$a] = $row['Abstrak'];
    $Abstrak2[$a]=substr($Abstrak[$a], 0, 200,);
    $Link[$a] = $row['Link'];
    $Penulis[$a] = $row['Penulis'];
    $Tanggal[$a] = $row['Tanggal'];
    $a++;
  endforeach;
  $totalData= $a;

  $builder2= $db->query("SELECT * FROM artikel WHERE Jenis != 'Artikel'  ORDER BY id DESC");
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
ARTIKEL
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-9">
            <br>
            <table width="100%" class="table-borderless" id="example">
                <thead>
                    <tr>
                        <th width="30%" style="color: white;">data hasil</th>
                        <th style="color: white;"></th>


                    </tr>
                </thead>
                <tbody>
                    <?php 
                      $i=0;
                      for($i=0;$i<$totalData;$i++){
                  ?>
                    <tr class="odd gradeX">
                        <td><img src="/assets/imgUpload/<?= $Image[$i]; ?>" id=imgKarya /></td>
                        <td><a href="/detailInfoAkademik/<?= $id[$i]; ?>" class="">
                                <strong style="color: black; font-size:20px"><?= $Judul[$i]; ?></strong>
                            </a>
                            <p class=""><?= $Tanggal[$i]; ?></p>
                            <p style="text-align: justify;" class="ml-4"><?= $Abstrak2[$i]; ?>... </p>
                        </td>

                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <script src="assets/js/jquery-1.12.4.js"></script>
            <script src="assets/js/jquery.dataTables.min.js"></script>
            <script src="assets/js/dataTables.bootstrap4.min.js"></script>
            <script type="text/javascript">
            $(document).ready(function() {
                $('#example').DataTable();
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