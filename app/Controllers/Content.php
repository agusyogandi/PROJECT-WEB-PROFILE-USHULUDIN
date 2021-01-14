<?php namespace App\Controllers;
use App\Models\VisitorModel;
class Content extends BaseController
{	

	public function index()
	{
		$ip    = $this->request->getIPAddress();
        $date  = date("Y-m-d");
        $waktu = time(); //
        $timeinsert = date("Y-m-d H:i:s");

        $db      = \Config\Database::connect();
        $builder = $db->table('visitor');
        $builder = $db->query("SELECT * FROM visitor WHERE ip='".$ip."' AND date='".$date."'");
         $a=0;
        foreach($builder->getResultArray() as $row):
          $ip[$a] = $row['ip'];
         
          $a++;
        endforeach;
        $totalData= $a;
        $ss = isset($totalData)?($totalData):0;

        if($totalData == 0){
        $builder = $db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('".$ip."','".$date."','1','".$waktu."','".$timeinsert."')");
    
        }

        else{
        $builder = $db->query("UPDATE visitor SET hits=hits+1, online='".$waktu."' WHERE ip='".$ip."' AND date='".$date."'");
       
        }
        
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
        return view('index', $data);
	}

	public function profil()
	{return view('profil');}

	public function karyaIlmiah()
	{return view('user/karya_ilmiah/Lv_karyaIlmiah');}
	public function artikel()
	{return view('user/karya_ilmiah/list_artikel');}
	public function buku()
	{return view('user/karya_ilmiah/list_buku');}
	public function opini()
	{return view('user/karya_ilmiah/list_opini');}
	public function jurnal()
	{return view('user/karya_ilmiah/list_jurnal');}
	public function kliping()
	{return view('user/karya_ilmiah/list_kliping');}
	public function detail_karyaIlmiah($id)
	{
		$data = [
			'id' => $id
		];
		return view('user/karya_ilmiah/karyaIlmiah', $data);
	}

	public function foto()
	{return view('user/foto/Lv_foto');}

	public function vidioKA()
	{return view('user/vidio/Lk_vidioKA');}
	public function vidioFK()
	{return view('user/vidio/Lk_vidioFK');}
	public function detailVidio($id)
	{
		$data = [
			'id' => $id
		];
		return view('user/vidio/detailVidio', $data);
	}


	public function news()
	{return view('user/news/Lv_news');}

	public function detailNews($id)
	{
		$data = [
			'id' => $id
		];
		return view('user/news/detailNews', $data);
	}


	public function UshuludinToday()
	{return view('user/today/ushuludinToday');}
	public function DetailUshuludinToday($id)
	{
		$data = [
			'id' => $id
		];
		return view('user/today/DetailUT', $data);
	}

	


	public function infoAkademik()
	{return view('user/info_akademik/Lv_infoAkademik');}
	public function detailInfoAkademik($id)
	{
		$data = [
			'id' => $id
		];
		return view('user/info_akademik/detailInfo', $data);
	}



	public function glosaria()
	{
		return view('user/glosaria/glosaria');
	}
	public function about()
	{
		return view('user/dll/about');
	}
	public function karir()
	{
		return view('user/dll/karir');
	}
	public function kontak()
	{
		return view('user/dll/kontak');
	}





	//--------------------------------------------------------------------

}