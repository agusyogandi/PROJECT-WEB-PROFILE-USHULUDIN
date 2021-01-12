<?php namespace App\Models;

use CodeIgniter\Model;

class VidioModel extends Model
{

    protected $table    ='vidio';

    protected $allowedFields = ['Judul','Slug','Tanggal_Input','Thumbnail','Link','Deskripsi'];

    public function getVidio($Slug = false){
        if($Slug == false){
            return $this->findAll();
        }
        return $this->where(['Slug'=> $Slug])->first();
    }
    // public function create($data){
    //     $query = $this->db->table('vidio')->insert($data);
    //     return $query;
    // }
    public function saveVidio($data){
        $query = $this->db->table('vidio')->insert($data);
        return $query;
    }
    public function editVidio($data, $id){
        $query = $this->db->table('vidio')->update($data, array('id' => $id));
        return $query;
    }
    public function deleteAll(){
        $query = $this->db->table('vidio')->truncate();
        return $query;
    }
  
}

    
       