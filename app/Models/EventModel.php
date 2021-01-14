<?php namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table    ='event';

    protected $allowedFields = ['Judul','Slug','Tanggal_mulai','Tanggal_input','Tanggal_selesai','Komite','Link','Image','Kontak','Lokasi','Deskripsi'];

    public function getEvent($Slug = false){
        if($Slug == false){
            return $this->findAll();
        }
        return $this->where(['Slug'=> $Slug])->first();
    }
    public function saveEvent($data){
        $query = $this->db->table('event')->insert($data);
        return $query;
    }
    public function editEvent($data, $id){
        $query = $this->db->table('event')->update($data, array('id' => $id));
        return $query;
    }
    public function deleteAll(){
        $query = $this->db->table('event')->truncate();
        return $query;
    }
  
}

    
       