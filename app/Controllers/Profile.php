<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\HTTP\ResponseInterface;

class Profile extends BaseController
{
    protected $ModelUser;
    protected $validation;
    public function __construct()
    {
        $this->ModelUser = new User();
        $this->validation = \Config\Services::validation();
    }
    public function index()
    {
        if (!session()->get('is_login')) {
            return redirect()->to('/');
        };
        echo view("main/profile");
    }

    public function simpan()
    {
        $id = session()->get('id');
        $nama = $this->request->getVar('nama');
        $class = $this->request->getVar('class');
        $parent = $this->request->getVar('parent');
        $address = $this->request->getVar('address');
        $phone = $this->request->getVar('phone');
        $email = $this->request->getVar('email');

        // dd($class);

        if ($nama == '' || $class == '' || $parent == '' || $address == '' || $phone == '' || $email == '') {
                return redirect()->to('profile');
        }

        $profile = [
            'nama' => $nama,
            'class' => $class,
            'parent' => $parent,
            'address' => $address,
            'phone' => $phone,
            'email' => $email,
        ];

        session()->set($profile);
        $this->ModelUser->update(['id' => $id], $profile);




        return redirect()->to('profile');
    }
}
