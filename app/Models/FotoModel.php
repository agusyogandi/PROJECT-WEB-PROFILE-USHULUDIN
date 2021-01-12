<?php namespace App\Models;

use CodeIgniter\Model;

class FotoModel extends Model
{
    protected $table    ='foto';

    protected $allowedFields = ['Judul','Slug','Image', 'Tanggal_input', 'Deskripsi'];

    public function getFoto($Slug = false){
        if($Slug == false){
            return $this->findAll();
        }
        return $this->where(['Slug'=> $Slug])->first();
    }
    // public function create($data){
    //     $query = $this->db->table('foto')->insert($data);
    //     return $query;
    // }
    public function saveFoto($data){
        $query = $this->db->table('foto')->insert($data);
        return $query;
    }
    public function editFoto($data, $id){
        $query = $this->db->table('foto')->update($data, array('id' => $id));
        return $query;
    }
    public function deleteAll(){
        $query = $this->db->table('foto')->truncate();
        return $query;
    }
  
}

    
       