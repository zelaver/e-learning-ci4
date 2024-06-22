<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    protected $ModelUser;
    protected $validation;
    public function __construct()
    {
        $this->ModelUser = new ModelUser();
        $this->validation = \Config\Services::validation();
        
    }

    public function index()
    {
        session()->destroy();
        echo view('main/login');
    }

    public function login(){
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $user = $this->ModelUser->where('email', $email)->first();
        
        // > Cek Email dan Password
        if(!$user) return redirect()->to('login')->with('wrn', "Email tidak ditemukan");
        if(!password_verify($password, $user['password'])) return redirect()->to('login')->with("wrn", 'password salah');

        // > Data yang di passing ke session
        $data = [
            'id_user' => $user['id_user'],
            'is_admin' => $user['is_admin'],
            'nama' => $user['nama'],
            'email' => $user['email'],
            'parent' => $user['parent'],
            'class' => $user['class'],
            'address' => $user['address'],
            'phone' => $user['phone'],
            'profilePict' => $user['profilePict'],
            'classes' => $user['classes'],
            'tasks' => $user['tasks'],
            'is_login' => true
        ];
        session()->set($data);


        
        
        return redirect()->to('profile');
    }

    public function logout()
    {
        return redirect()->to('login');
    }
}
