<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'id_murid';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', "email", "password", "class", "address", "phone", "parent", "profilePict", "classes", 'tasks'];
}
