<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\ModelClass;
use App\Models\ModelKehadiran;
use App\Models\ModelTask;
use App\Models\ModelUser;

class Admin extends BaseController
{
    protected $ModelClass;
    protected $ModelKehadiran;
    protected $ModelTask;
    protected $ModelUser;
    public function __construct()
    {
        $this->ModelClass = new ModelClass();
        $this->ModelKehadiran = new ModelKehadiran();
        $this->ModelTask = new ModelTask();
        $this->ModelUser = new ModelUser();
    }


    public function classesData()
    { 
        $jumlahBaris = 6;
        $katakunci = $this->request->getGet('katakunci');

        if ($katakunci) {
            $pencarian = $this->ModelClass->cari($katakunci);
        } else {
            $pencarian = $this->ModelClass;
        }
        $data['katakunci'] = $katakunci;
        $data['dataClass'] = $pencarian->orderBy('kode_kelas', 'asc')->paginate($jumlahBaris);
        $data['pager'] = $this->ModelClass->pager;

        return view('admin/classes', $data);
    }

    public function classesDataSave(){
        $validation = \Config\Services::validation();
        $rules = [
            'matpel' => [
                'label' => 'matpel',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ],

            ],
            'hari' => [
                'label' => 'hari',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ],

            ],
            'jam_mulai' => [
                'label' => 'jam_mulai',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ],
            ],
            'jam_berakhir' => [
                'label' => 'jam_berakhir',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ],
            ],
            'guru' => [
                'label' => 'guru',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ],
            ],
            'total_pertemuan' => [
                'label' => 'total_pertemuan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ],
            ],
        ];

        $validation->setRules($rules);
        if ($validation->withRequest($this->request)->run()) {
            $kode_kelas = $this->request->getPost('kode_kelas');
            $matpel = $this->request->getPost('matpel');
            $hari = $this->request->getPost('hari');
            $jam_mulai = $this->request->getPost('jam_mulai');
            $jam_berakhir = $this->request->getPost('jam_berakhir');
            $guru = $this->request->getPost('guru');
            $total_pertemuan = $this->request->getPost('total_pertemuan');

            $dataSave = [
                'kode_kelas' => $kode_kelas,
                'matpel' => $matpel,
                'hari' => $hari,
                'jam_mulai' => $jam_mulai,
                'jam_berakhir' => $jam_berakhir,
                'guru' => $guru,
                'total_pertemuan' => $total_pertemuan,
                'materi' => '[]',
            ];

            $this->ModelClass->save($dataSave);

            
            
            $hasil['success'] = true;
            $hasil['error'] = "aman coy";
        } else {
            $hasil['success'] = false;
            $hasil['error'] = $validation->listErrors();
            dd($validation->listErrors());
        }

        // return json_encode($hasil);
        return redirect()->to(base_url('ClassesData'));
    }

    public function userData()
    {
    }

    public function taskData()
    {
    }
}
