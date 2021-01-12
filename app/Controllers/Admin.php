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
		
		return view('admin/index');
    }
    // public function berita()
	// {
	// 	return view('admin/crud/berita');
	// }
	// public function artikel()
	// {   $db      = \Config\Database::connect();
    //     $builder = $db->table('artikel');
    //     $totalData = $builder->countAll();
	// 	$artikel = $this->artikelModel->findAll();
	// 	$data = [
	// 		'artikel' => $artikel,
	// 		'totalData' => $totalData
	// 	];
	// 	return view('admin/crud/artikel', $data);
	// }
	// public function vidio()
	// {
	// 	return view('admin/crud/vidio');
	// }
	// public function foto()
	// {
	// 	return view('admin/crud/foto');
	// }
	// public function kabarAlumni()
	// {
	// 	return view('admin/crud/kabarAlumni');
	// }
	// public function inspirasiPagi()
	// {
	// 	return view('admin/crud/inspirasiPagi');
	// }
	// public function event()
	// {
	// 	return view('admin/crud/event');
    // }
    // public function statistik()
	// {
	// 	return view('admin/statistik');
	// }

	//--------------------------------------------------------------------

}