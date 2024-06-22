<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelTask;
use App\Models\ModelClass;
use DateTime;

class Task extends BaseController
{

    protected $ModelTask;
    protected $ModelClass;
    public function __construct()
    {
        $this->ModelTask = new ModelTask();
        $this->ModelClass = new ModelClass();
    }

    public function index()
    {
        if (!session()->get('is_login')) {
            return redirect()->to('/');
        };
        $id_user = session()->get('id_user');
        $tasks = $this->ModelTask->where('id_user',  $id_user)->find();
        
        $unDoneTasks = array_filter($tasks, function($task) {
            return empty($task['link_tugas']);
        });
        $DoneTasks = array_filter($tasks, function($task) {
            return !empty($task['link_tugas']);
        });

        // dd($unDoneTasks);

        $data['tasks'] = $tasks;
        $data['ModelClass'] = $this->ModelClass;
        $data['ModelTask'] = $this->ModelTask;
        $data['unDoneTasks'] = $unDoneTasks;
        $data['DoneTasks'] = $DoneTasks;

        echo view('main/tasks', $data);
    }

    private function getTaskInfo($id_tugas)
    {
        $tasks = $this->ModelTask->where('id_tugas',  $id_tugas)->first();

        $kode_kelas = $tasks['kode_kelas'];
        $judul_tugas = $tasks['judul_tugas'];
        $desc_tugas = $tasks['desc_tugas'];
        $link_tugas = $tasks['link_tugas'];

        $tenggat = $tasks['tenggat_tugas'];
        $tenggat = new DateTime($tenggat);
        $tenggat = $tenggat->format('d/m/y');

        return [
            "id_tugas" => $id_tugas,
            "kode_kelas" => $kode_kelas,
            "judul_tugas" => $judul_tugas,
            "desc_tugas" => $desc_tugas,
            "tenggat" => $tenggat,
            "link_tugas" => $link_tugas
        ];
    }

    public function task($id_tugas)
    {
        $data = $this->getTaskInfo($id_tugas);
        echo view('main/task', $data);
    }
    
    public function kirimTugas($id_tugas){
        $link_tugas = $this->request->getVar('link_tugas');
        $this->ModelTask->update($id_tugas, ['link_tugas' => $link_tugas]);
        
        
        return redirect()->to(base_url('task/') . $id_tugas);

    }
}
