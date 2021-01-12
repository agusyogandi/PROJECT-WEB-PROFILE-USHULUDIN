<?php namespace App\Controllers;

class Content extends BaseController
{
	public function index()
	{
		return view('index');
	}

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

	
	public function profil()
	{
		return view('profil');
	}
	public function news()
	{
		return view('news');
	}
	public function infoAkademik()
	{
		return view('infoAkademik');
	}
	public function UshuludinToday()
	{
		return view('ushuludinToday');
	}
	public function glosaria()
	{
		return view('glosaria');
	}
	public function about()
	{
		return view('about');
	}
	public function karir()
	{
		return view('karir');
	}
	public function kontak()
	{
		return view('kontak');
	}
	public function vidio()
	{
		return view('vidio');
	}
	public function foto()
	{
		return view('foto');
	}



	//--------------------------------------------------------------------

}