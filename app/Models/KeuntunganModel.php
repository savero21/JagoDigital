<?php

namespace App\Models;

use CodeIgniter\Model;

class KeuntunganModel extends Model
{
    protected $table = 'tb_keuntungan';
    protected $primaryKey = 'id_keuntungan';
    protected $allowedFields = ['judul_keuntungan', 'deskripsi_keuntungan', 'icon_keuntungan'];
}