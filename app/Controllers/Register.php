<?php

namespace App\Controllers;

use App\Models\User;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Register extends BaseController
{
    protected $ModelUser;
    public function __construct()
    {
        $this->ModelUser = new User();
    }

    // public function index()
    // {
    //     echo view('main/register');
    // }

    public function index(){
        $msg = '';
        echo view('main/register', ['msg' => $msg]);
    }

    public function register()
    {

        // > Rules validasi untuk form
        $rules = [
            'nama' => 'required',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[3]|matches[confirm-password]',
            'confirm-password' => 'required|matches[password]'
        ];

        // > Validation messages
        $messages = [
            'nama' => [
                'required' => 'Nama Belum diisi!!'
            ],
            'email' => [
                'required' => 'Email Belum diisi!!',
                'valid_email' => 'Email Tidak Benar!!',
                
            ],
            'password' => [
                'required' => 'Password Belum diisi!!',
                'min_length' => 'Password Terlalu Pendek!!',
                'matches' => 'Password Tidak Sama!!'
            ],
            'confirm-password' => [
                'required' => 'Repeat Password Belum diisi!!',
                'matches' => 'Repeat Password Tidak Sama!!'
            ]
        ];

        // > Cek Validasi input
        $validation = \Config\Services::validation();
        if (!$this->validate($rules, $messages)) {
            $msg = $validation->getErrors();
            echo view('main/register', ['msg' => $msg]);

        } else {
            $data = [
                'nama' => $this->request->getVar('nama'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'parent' => '',
                'classes' => '[]',
                'tasks' => '[]'
            ];

            $this->ModelUser->insert($data);

            // session()->setFlashdata('msg', '<div class="alert alert-success alert-message" role="alert">Registrasi Berhasil!</div>');
            return redirect()->to(base_url('login'));
        }
    }
}
