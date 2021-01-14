<?php namespace App\Controllers;
use App\Models\EventModel;

use CodeIgniter\Controller;

class Event extends BaseController
{
	protected $ArtikeModel;
	public function __construct()
	{
		helper('form');
		$this->eventModel = new EventModel();
	}


	public function index()
	{
		$event = $this->eventModel->getEvent();
		$data = [
			'event' => $event
		];
        return view('admin/crud/event/index', $data);

	}
	public function detail($Slug){

		$data = [
			'detail' => $this->eventModel->getEvent($Slug)
		];
		return view('admin/crud/event/detailView', $data);
	}

	public function create(){
		$data = [
			'validation' => \Config\Services::validation()
		];
		return view('admin/crud/event/createView', $data);
	}

	public function save(){
			
		if(!$this->validate(
			['Judul' => 'required|is_unique[event.Judul]'
			]
		)){
			$validation = \Config\Services::validation();
			return redirect()->to('/event/create')->withInput()->with('validation' , $validation);
        }
        $desk = $this->request->getVar('deskripsi');
		$pecah = explode("\r\n\r\n", $desk);
		$text= " ";
		for ($i=0; $i<=count($pecah)-1; $i++)
			{
			$part = str_replace($pecah[$i], "<p>".$pecah[$i]."</p>", $pecah[$i]);
			$text .= $part;
			}
		$gambar = $this->request->getFile('Image');
		$gambar->move(ROOTPATH. 'public/assets/imgUpload');
	   	$Slug = url_title($this->request->getVar('Judul'), '-', true);

	  $data = array(
		'Judul'				=> $this->request->getVar('Judul'),
		'Slug'				=> $Slug,
        'Tanggal_input'		=> $this->request->getVar('Tanggal_input'),
        'Tanggal_mulai'		=> $this->request->getVar('Tanggal_mulai'),
        'Tanggal_selesai'	=> $this->request->getVar('Tanggal_selesai'),
        'Deskripsi'			=> $text,
        'Link'			=> $this->request->getVar('Link'),
        'Komite'			=> $this->request->getVar('Komite'),
        'Lokasi'			=> $this->request->getVar('Lokasi'),
        'Kontak'			=> $this->request->getVar('Kontak'),
		'Image' 			=> $gambar->getName()
		
	  );


	 $this->eventModel->saveEvent($data);
	session()->setflashdata('pesan', 'Berhasil Menambahkan Data Event Baru');
	return redirect()->to('/eventFU');
			
   }

	
	public function delete($id){
		$this->eventModel->delete($id);
		session()->setflashdata('pesan', 'Berhasil Menghapus Data Event');
		return redirect()->to('/eventFU');
	}

	public function deleteAll(){
		$this->eventModel->deleteAll();
		session()->setflashdata('pesan', 'Berhasil Menghapus Semua Data Event');
		return redirect()->to('/eventFU');
	}
	
	public function edit($id){
        $desk = $this->request->getVar('deskripsi');
		$pecah = explode("\r\n\r\n", $desk);
		$text= " ";
		for ($i=0; $i<=count($pecah)-1; $i++)
			{
			$part = str_replace($pecah[$i], "<p>".$pecah[$i]."</p>", $pecah[$i]);
			$text .= $part;
			}

	   	$Slug = url_title($this->request->getVar('Judul'), '-', true);

	  $data = array(
		'Judul'				=> $this->request->getVar('Judul'),
		'Slug'				=> $Slug,
        'Tanggal_input'		=> $this->request->getVar('Tanggal_input'),
        'Tanggal_mulai'		=> $this->request->getVar('Tanggal_mulai'),
        'Tanggal_selesai'	=> $this->request->getVar('Tanggal_selesai'),
        'Deskripsi'			=> $text,
        'Link'			=> $this->request->getVar('Link'),
        'Komite'			=> $this->request->getVar('Komite'),
        'Lokasi'			=> $this->request->getVar('Lokasi'),
        'Kontak'			=> $this->request->getVar('Kontak')
		
	  );
			$this->eventModel->editEvent($data, $id);
			session()->setflashdata('pesan', 'Berhasil Mengedit Data Event');
			// return view('admin/crud/foto', $data);
			return redirect()->to('/eventFU');
	}

	//--------------------------------------------------------------------

}