<?php

namespace App\Controllers;

class Classes extends BaseController
{
    public function index()
    {
        if(!session()->get('is_login')){
            return redirect()->to('/');
        };
        return view('main/class');
    }
}
