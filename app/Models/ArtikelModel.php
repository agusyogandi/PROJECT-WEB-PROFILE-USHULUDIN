<?php namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table    ='artikel';

    protected $allowedFields = ['Judul','Slug','Tanggal','Tanggal_update','Jenis','Abstrak','Penulis','Link','Image'];

    public function getArtikel($Slug = false){
        if($Slug == false){
            return $this->findAll();
        }
        return $this->where(['Slug'=> $Slug])->first();
    }
    public function saveArtikel($data){
        $query = $this->db->table('artikel')->insert($data);
        return $query;
    }
    public function editArtikel($data, $id){
        $query = $this->db->table('artikel')->update($data, array('id' => $id));
        return $query;
    }
    public function deleteAll(){
        $query = $this->db->table('artikel')->truncate();
        return $query;
    }
  
}

    
       