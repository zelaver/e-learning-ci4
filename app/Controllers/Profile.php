<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;
use CodeIgniter\HTTP\ResponseInterface;

class Profile extends BaseController
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
        if (!session()->get('is_login')) {
            return redirect()->to('/');
        };
        echo view("main/profile");
    }

    public function simpan()
    {
        $id_murid = session()->get('id_murid');
        $nama = $this->request->getVar('nama');
        $class = $this->request->getVar('class');
        $parent = $this->request->getVar('parent');
        $address = $this->request->getVar('address');
        $phone = $this->request->getVar('phone');
        $email = $this->request->getVar('email');
        $profilePict = $this->request->getFile('profilePict');

        // dd($profilePict);
        // dd($namaGambar);

        $profile = [
            'nama' => $nama,
            'class' => $class,
            'parent' => $parent,
            'address' => $address,
            'phone' => $phone,
            'email' => $email,
        ];

        // >Reject jika input form ada yang kosong 
        if ($nama == '' || $class == '' || $parent == '' || $address == '' || $phone == '' || $email == '') {
            return redirect()->to('profile');
        }

        if ($profilePict && $profilePict->isValid() && !$profilePict->hasMoved()) {
            $profilePict->move('./img/profile/');
            $profilePictName = $profilePict->getName();
            $profile = $profile + [
                'profilePict' => $profilePictName
            ];
            // dd('masuk sini');
        }


        session()->set($profile);
        $this->ModelUser->update(['id_murid' => $id_murid], $profile);
        $query = $this->ModelUser->getLastQuery();
        // dd($query);



        return redirect()->to('profile');
    }
}
