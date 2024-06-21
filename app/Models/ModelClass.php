<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelClass extends Model
{
    protected $table            = 'class';
    protected $primaryKey       = 'kode_kelas';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [ 'matpel', 'hari', 'jam_mulai', 'jam_berakhir', 'guru', 'total_pertemuan', 'materi'];
}
