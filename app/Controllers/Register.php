<?php

namespace App\Controllers;

use App\Models\ModelUser;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Register extends BaseController
{
    protected $ModelUser;
    protected $validation;
    public function __construct()
    {
        $this->ModelUser = new ModelUser();
        $this->validation = \Config\Services::validation();

    }

    // public function index()
    // {
    //     echo view('main/register');
    // }

    public function index()
    {
        $data['validation'] = session()->getFlashdata('validation');
        $data['masuksini'] = 'masuk sini';
        return view('main/register', $data);
    }

    public function register()
    {

        // > Rules validasi untuk form
        $rules = [
            'nama' => 'required|is_unique[user.nama]',
            'email' => 'required|valid_email|is_unique[user.email]',
            'password' => 'required|min_length[3]|matches[confirm-password]',
            'confirm-password' => 'required|matches[password]'
        ];

        // > Validation messages
        $messages = [
            'nama' => [
                'required' => 'Nama Belum diisi!',
                'is_unique' => 'Nama sudah terdaftar!'

            ],
            'email' => [
                'required' => 'Email Belum diisi!',
                'valid_email' => 'Email Tidak Benar!',
                'is_unique' => 'Email sudah terdaftar!'

            ],
            'password' => [
                'required' => 'Password Belum diisi!',
                'min_length' => 'Password Terlalu Pendek!',
                'matches' => 'Password Tidak Sama!'
            ],
            'confirm-password' => [
                'required' => 'Confirm Password Belum diisi!',
                'matches' => 'Confirm Password Tidak Sama!'
            ]
        ];

        // > Cek Validasi input
        if (!$this->validate($rules, $messages)) {
            // echo view('main/register', ['msg' => $msg]);
            // dd($validation->listErrors());
            // dd($validation->getErrors());
            $validation = $this->validation;
            return redirect()->to(base_url('register'))->withInput()->with('validation', $validation);
            
            // $data['validation'] = \Config\Services::validation();
            // return view('main/register', $data);
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
            
            session()->setFlashdata('msg', 'Registrasi Berhasil!');
            return redirect()->to(base_url('login'));
        }
    }
}
