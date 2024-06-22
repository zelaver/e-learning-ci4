<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKehadiran extends Model
{
    protected $table            = 'kehadiran';
    protected $primaryKey       = 'id_kehadiran';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kode_kelas', 'id_user', 'created_at'];
}
