<?php namespace App\Controllers;
use App\Models\ArtikelModel;
class admin extends BaseController
{
	protected $artikelModel;
	public function __construct(){
		$this-> artikelModel = new ArtikelModel();
	}
	public function index()
	{
		$date  = date("Y-m-d");
        $waktu = time(); //
        $timeinsert = date("Y-m-d H:i:s");

        $db      = \Config\Database::connect();
		$de = $db->query("SELECT * FROM visitor WHERE date='".$date."' GROUP BY ip");
        $b=0;
        foreach($de->getResultArray() as $row):
          $ip[$b] = $row['ip'];
          $b++;
        endforeach;
        $pengunjunghariini  = $b;
        
        $dww = $db->query("SELECT hits FROM visitor");
        $c=0;
        foreach($dww->getResultArray() as $row):
          $hits[$c] = $row['hits'];
          $c++;
        endforeach;
        $dbpengunjung = $c;

		for($i=0;$i<$dbpengunjung;$i++){
			$hitsPengunjung = $hits[$i];
		}
        $totalpengunjung = $hitsPengunjung;
        $bataswaktu = time() - 300;
        
        $sr = $db->query("SELECT * FROM visitor WHERE online > '".$bataswaktu."'");
        $d=0;
        foreach($sr->getResultArray() as $row):
          $ip[$d] = $row['ip'];
          $d++;
        endforeach;
        $pengunjungonline  = $d;

        
        $data = array(
           'pengunjunghariini'  =>$pengunjunghariini,
            'totalpengunjung'   =>$totalpengunjung,
           'pengunjungonline'   =>$pengunjungonline
        );
        return view('admin/index', $data);
    }
    public function hapusPengunjung()
	{
		$db      = \Config\Database::connect();
		$de = $db->query("DELETE FROM visitor");

		return view('/indexAdmin');
	}

}