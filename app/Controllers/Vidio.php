<?php namespace App\Controllers;
use App\Models\VidioModel;

use CodeIgniter\Controller;

class Vidio extends BaseController
{
	protected $VidioModel;
	public function __construct()
	{
		helper('form');
		$this->vidioModel = new VidioModel();
	}


	public function index()
	{
		$vidio = $this->vidioModel->getVidio();
		$data = [
			'vidio' => $vidio
		];
        return view('admin/crud/vidio/index', $data);

	}
	public function detail($Slug){

		$data = [
			'detail' => $this->vidioModel->getVidio($Slug)
		];
		return view('admin/crud/vidio/detailView', $data);
	}

	public function create(){
		$data = [
			'validation' => \Config\Services::validation()
		];
		return view('admin/crud/vidio/createView', $data);
	}

	public function save(){
			
		if(!$this->validate(
			['Judul' => 'required|is_unique[vidio.Judul]',
			
			]
		)){
			$validation = \Config\Services::validation();
			return redirect()->to('/vidio/create')->withInput()->with('validation' , $validation);
		}
		$Thumbnail = $this->request->getFile('Thumbnail');
		$Thumbnail->move(ROOTPATH. 'public/assets/imgUpload');
		// $Vidio = $this->request->getFile('Vidio');
		// $Vidio->move(ROOTPATH. 'public/assets/imgUpload');
	   	$Slug = url_title($this->request->getVar('Judul'), '-', true);

	  $data = array(
		'Judul'				=> $this->request->getVar('Judul'),
		'Slug'				=> $Slug,
		'Tanggal_input'		=> $this->request->getVar('Tanggal'),
		'Deskripsi'			=> $this->request->getVar('Deskripsi'),
		'Thumbnail' 		=> $Thumbnail->getName(),
		'Vidio'		 		=> $this->request->getVar('Jenis'),
		'Link' 				=> $this->request->getVar('Link')
		
	  );


	 $this->vidioModel->saveVidio($data);
	session()->setflashdata('pesan', 'Berhasil Menambahkan Data vidio Baru');
	return redirect()->to('/vidioFU');
			
   }

	
	public function delete($id){
		$this->vidioModel->delete($id);
		session()->setflashdata('pesan', 'Berhasil Menghapus Data vidio');
		return redirect()->to('/vidioFU');
	}

	public function deleteAll(){
		$this->vidioModel->deleteAll();
		session()->setflashdata('pesan', 'Berhasil Menghapus Semua Data vidio');
		return redirect()->to('/vidioFU');
	}
	
	public function edit($id){
		$Slug = url_title($this->request->getVar('Judul'), '-', true);
			
			$data = array(
				"id"				=>$id,
				'Judul'				=> $this->request->getVar('Judul'),
				'Slug'				=> $Slug,	
				'Tanggal_update'	=> $this->request->getVar('Tanggal_update'),
				'Deskripsi'			=> $this->request->getVar('Deskripsi'),
				'Vidio'		 		=> $this->request->getVar('Jenis'),
				'Link' 				=> $this->request->getVar('Link')

				
				
			);
			$this->vidioModel->editvidio($data, $id);
			session()->setflashdata('pesan', 'Berhasil Mengedit Data vidio');
			// return view('admin/crud/vidio', $data);
			return redirect()->to('/vidioFU');
	}

	//--------------------------------------------------------------------

}