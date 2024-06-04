<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Profile extends BaseController
{
    public function index()
    {
        if(!session()->get('is_login')){
            return redirect()->to('/');
        };

        echo view("main/profile");
    }
}
