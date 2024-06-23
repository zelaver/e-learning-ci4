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

    function cari($katakunci)
    {
        $builder  = $this->table("user1");
        $arr_katakunci = explode(" ", $katakunci);
        for ($i = 0; $i < count($arr_katakunci); $i++) {
            $builder->orLike('kode_kelas', $arr_katakunci[$i]);
            $builder->orLike('matpel', $arr_katakunci[$i]);
            $builder->orLike('hari', $arr_katakunci[$i]);
            $builder->orLike('jam_mulai', $arr_katakunci[$i]);
            $builder->orLike('jam_berakhir', $arr_katakunci[$i]);
            $builder->orLike('guru', $arr_katakunci[$i]);
            $builder->orLike('total_pertemuan', $arr_katakunci[$i]);
        }

        return $builder;
    }

}
