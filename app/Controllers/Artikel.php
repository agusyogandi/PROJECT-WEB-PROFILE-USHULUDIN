<?php namespace App\Controllers;
use App\Models\ArtikelModel;

use CodeIgniter\Controller;

class Artikel extends BaseController
{
	protected $artikelModel;
	public function __construct()
	{
		helper('form');
		$this->artikelModel = new ArtikelModel();
	}


	public function index()
	{
		$artikel = $this->artikelModel->getArtikel();
		$data = [
			'artikel' => $artikel
		];
		return view('admin/crud/artikel/index', $data);
	}
	public function detail($Slug){

		$data = [
			'detail' => $this->artikelModel->getArtikel($Slug)
		];
		return view('admin/crud/artikel/detailView', $data);
	}
	public function create(){

		$data = [
			'validation' => \Config\Services::validation()
		];
		return view('admin/crud/artikel/createView', $data);
	}
	public function save()
	{
				if(!$this->validate(
					['Judul' => 'required|is_unique[artikel.Judul]'
					]
				)){
					$validation = \Config\Services::validation();
					return redirect()->to('/artikel/create')->withInput()->with('validation' , $validation);
				}
		$gambar = $this->request->getFile('Image');
		$desk = $this->request->getVar('Abstrak');
		$pecah = explode("\r\n\r\n", $desk);
		$text= " ";
		for ($i=0; $i<=count($pecah)-1; $i++)
			{
			$part = str_replace($pecah[$i], "<p>".$pecah[$i]."</p>", $pecah[$i]);
			$text .= $part;
			}
		$gambar->move(ROOTPATH. 'public/assets/imgUpload');
			   $Slug = url_title($this->request->getVar('Judul'), '-', true);
	 
			  $data = array(
				'Judul'				=> $this->request->getVar('Judul'),
				'Slug'				=> $Slug,
				'Penulis'			=> $this->request->getVar('Penulis'),
				'Jenis'				=> $this->request->getVar('Jenis'),
				'Tanggal'			=> $this->request->getVar('Tanggal'),
				'Abstrak'			=> $text,
				'Link'				=> $this->request->getVar('Link'),
				'Image' 			=> $gambar->getName()
				
			  );

  
     		$this->artikelModel->saveArtikel($data);
			session()->setflashdata('pesan', 'Berhasil Menambahkan Data Karya Ilmiah Baru');
			return redirect()->to('/artikelFU');
			
   }

	
	
	public function delete($id){
		$this->artikelModel->delete($id);
		session()->setflashdata('pesan', 'Berhasil Menghapus Data Artikel');
		return redirect()->to('/artikelFU');
	}
	public function deleteAll(){
		$this->artikelModel->deleteAll();
		session()->setflashdata('pesan', 'Berhasil Menghapus Semua Data Artikel');
		return redirect()->to('/artikelFU');
	}
	public function edit($id){
		$Slug = url_title($this->request->getVar('Judul'), '-', true);
			
			$data = array(
				"id"				=> $id,
				'Judul'				=> $this->request->getVar('Judul'),
				'Slug'				=> $Slug,
				'Penulis'			=> $this->request->getVar('Penulis'),
				'Tanggal_update'	=> $this->request->getVar('Tanggal_update'),
				'Abstrak'			=> $this->request->getVar('Abstrak'),
				'Link'				=> $this->request->getVar('Link')
				
				
			);
		
			$this->artikelModel->save($data, $id);
			session()->setflashdata('pesan', 'Berhasil Mengedit Data Karya Ilmiah');
			return redirect()->to('/artikelFU');
	}

	//--------------------------------------------------------------------

}