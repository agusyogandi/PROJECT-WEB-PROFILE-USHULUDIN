<?php namespace App\Controllers;
use App\Models\FotoModel;

use CodeIgniter\Controller;

class Foto extends BaseController
{
	protected $ArtikeModel;
	public function __construct()
	{
		helper('form');
		$this->fotoModel = new FotoModel();
	}


	public function index()
	{
		$foto = $this->fotoModel->getfoto();
		$data = [
			'foto' => $foto
		];
        return view('admin/crud/foto/index', $data);

	}
	public function detail($Slug){

		$data = [
			'detail' => $this->fotoModel->getfoto($Slug)
		];
		return view('admin/crud/foto/detailView', $data);
	}

	public function create(){
		$data = [
			'validation' => \Config\Services::validation()
		];
		return view('admin/crud/foto/createView', $data);
	}

	public function save(){
			
		if(!$this->validate(
			['Judul' => 'required|is_unique[foto.Judul]'
			]
		)){
			$validation = \Config\Services::validation();
			return redirect()->to('/foto/create')->withInput()->with('validation' , $validation);
		}
		$gambar = $this->request->getFile('Image');
		$gambar->move(ROOTPATH. 'public/assets/imgUpload');
	   	$Slug = url_title($this->request->getVar('Judul'), '-', true);

	  $data = array(
		'Judul'				=> $this->request->getVar('Judul'),
		'Slug'				=> $Slug,
		'Tanggal_input'		=> $this->request->getVar('Tanggal'),
		'Deskripsi'			=> $this->request->getVar('Deskripsi'),
		'Image' 			=> $gambar->getName()
		
	  );


	 $this->fotoModel->saveFoto($data);
	session()->setflashdata('pesan', 'Berhasil Menambahkan Data Foto Baru');
	return redirect()->to('/fotoFU');
			
   }

	
	public function delete($id){
		$this->fotoModel->delete($id);
		session()->setflashdata('pesan', 'Berhasil Menghapus Data foto');
		return redirect()->to('/fotoFU');
	}

	public function deleteAll(){
		$this->fotoModel->deleteAll();
		session()->setflashdata('pesan', 'Berhasil Menghapus Semua Data foto');
		return redirect()->to('/fotoFU');
	}
	
	public function edit($id){
		$Slug = url_title($this->request->getVar('Judul'), '-', true);
			
			$data = array(
				"id"				=>$id,
				'Judul'				=> $this->request->getVar('Judul'),
				'Slug'				=> $Slug,	
				'Tanggal_update'	=> $this->request->getVar('Tanggal_update'),
				'Deskripsi'			=> $this->request->getVar('Deskripsi'),

				
				
			);
			$this->fotoModel->editfoto($data, $id);
			session()->setflashdata('pesan', 'Berhasil Mengedit Data Foto');
			// return view('admin/crud/foto', $data);
			return redirect()->to('/fotoFU');
	}

	//--------------------------------------------------------------------

}