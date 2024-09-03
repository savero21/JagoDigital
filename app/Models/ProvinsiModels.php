<?php

namespace App\Models;

use CodeIgniter\Model;

class ProvinsiModels extends Model
{
    protected $table = "tb_provinsi";
    protected $primaryKey = "id_provinsi";
    protected $returnType = "object";
    protected $allowedFields = ['id_provinsi', 'nama_provinsi'];

    public function getProvinsi()
    {
         return $this->db->table('tb_provinsi')->get()->getResultArray();  
    }
}