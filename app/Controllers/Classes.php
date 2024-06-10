<?php

namespace App\Controllers;
use App\Models\ModelClass;

class Classes extends BaseController
{

    protected $ModelClass;
    public function __construct()
    {
        $this->ModelClass = new ModelClass();        
    }

    public function index()
    {
        if(!session()->get('is_login')){
            return redirect()->to('/');
        };

        $data['ModelClass'] = $this->ModelClass;
        return view('main/classes', $data);
    }

    public function class($kode){
        return view('main/class');
    }

}
