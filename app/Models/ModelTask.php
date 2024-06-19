<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTask extends Model
{
    protected $table            = 'task';
    protected $primaryKey       = 'id_tugas';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kode_kelas', 'id_murid', 'judul_tugas', 'desc_tugas', 'tenggat_tugas', 'link_tugas'];
}
