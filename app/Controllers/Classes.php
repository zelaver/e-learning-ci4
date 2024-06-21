<?php

namespace App\Controllers;

use App\Models\ModelClass;
use App\Models\ModelKehadiran;
use App\Models\ModelTask;
use CodeIgniter\Database\BaseUtils;
use DateTime;
use DateTimeZone;

class Classes extends BaseController
{

    protected $ModelClass;
    protected $ModelKehadiran;
    protected $ModelTask;
    public function __construct()
    {
        $this->ModelClass = new ModelClass();
        $this->ModelKehadiran = new ModelKehadiran();
        $this->ModelTask = new ModelTask();
    }

    public function index()
    {
        if (!session()->get('is_login')) {
            return redirect()->to('/');
        };

        $data['ModelClass'] = $this->ModelClass;
        return view('main/classes', $data);
    }

    private function getClassInfo($kode){
        $class_info = $this->ModelClass->where('kode_kelas', $kode)->first();
        $kode_kelas = $class_info['kode_kelas'];
        $matpel = $class_info['matpel'];
        $hari = $class_info['hari'];
        $jam_mulai  = $class_info['jam_mulai'];
        $jam_berakhir  = $class_info['jam_berakhir'];
        $guru = $class_info['guru'];
        $total_pertemuan = $class_info['total_pertemuan'];

        $ModelKehadiran = $this->ModelKehadiran;
        $ModelTask = $this->ModelTask;

        $tasks = $ModelTask->where('kode_kelas', $kode_kelas)->where('id_murid', session()->get('id_murid'))->findAll();
        // dd($tasks);
        
        
        date_default_timezone_set('Asia/Jakarta'); 
        $currentTime = new DateTime();
        $startTime = new DateTime($jam_mulai . ".00");
        $endTime = new DateTime($jam_berakhir . ".00");
        $diLuarJam = ($currentTime < $startTime || $currentTime > $endTime);
        $diLuarHari = ($currentTime->format('l') != $hari);
        
        $listKehadiran = $ModelKehadiran->where('kode_kelas', $kode_kelas)
        ->where('id_murid', session()->get('id_murid'))
        ->findAll();
        
        // dd($currentTime);

        $isPresensi = false;
        foreach ($listKehadiran as $kehadiran) {
            $created_at = $kehadiran['created_at'];
            $created_at = new DateTime($created_at);

            $id_murid = session()->get('id_murid');

            $isPresensi = ($kode_kelas == $kehadiran['kode_kelas'] && $id_murid == $kehadiran['id_murid'] && $currentTime->format('d-l') == $created_at->format('d-l'));

            if ($isPresensi) break;
        }


        return [
            'kode_kelas' => $kode_kelas,
            'matpel' => $matpel,
            'hari' => $hari,
            'jam_mulai' => $jam_mulai,
            'jam_berakhir' => $jam_berakhir,
            'guru' => $guru,
            'total_pertemuan' => $total_pertemuan,
            
            'ModelKehadiran' => $ModelKehadiran,
            'ModelTask' => $ModelTask,

            'tasks' => $tasks,

            'isPresensi' => $isPresensi,
            'diLuarJam' => $diLuarJam,
            'listKehadiran' => $listKehadiran,
            'diLuarHari' => $diLuarHari
        ];



    }

    public function class($kode)
    {
        $data = $this->getClassInfo($kode);
        return view('main/class', $data);
    }

    

    public function presensi($kode_kelas)
    {
        
        $classInfo = $this->getClassInfo($kode_kelas);

        $isPresensi = $classInfo['isPresensi'];
        $diLuarJam = $classInfo['diLuarJam'];
        $diLuarHari = $classInfo['diLuarHari'];

        $id_murid = session()->get('id_murid');
        $created_at = new DateTime();

        if ($isPresensi || $diLuarJam || $diLuarHari) {
            session()->setFlashdata('msg', 'DIluar jam pelajaran!');
            return redirect()->to(base_url('classes/') . $kode_kelas);
        } else {
            $data = [
                'kode_kelas' => $kode_kelas,
                'id_murid' => $id_murid,
                'created_at' => $created_at->format('Y-m-d H:i:s')
            ];

            $this->ModelKehadiran->insert($data);

            return redirect()->to(base_url('classes/') . $kode_kelas);
        }
    }

    public function downloadMateri($fileName){
        $filepath = WRITEPATH . 'uploads/' . $fileName;
        // echo $fileName;
        
        // Periksa apakah file ada
        if (!file_exists($filepath)) {
            dd('kocak bgt njir');
            return redirect()->back()->with('error', 'File not found');
        }

        // Gunakan response helper untuk mengirim file sebagai unduhan
        return $this->response->download($filepath, null);
    }
}
