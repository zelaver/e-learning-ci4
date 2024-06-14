<?php

namespace App\Controllers;

use App\Models\ModelClass;
use App\Models\ModelKehadiran;
use DateTime;
use DateTimeZone;

class Classes extends BaseController
{

    protected $ModelClass;
    protected $ModelKehadiran;
    public function __construct()
    {
        $this->ModelClass = new ModelClass();
        $this->ModelKehadiran = new ModelKehadiran();
    }

    public function index()
    {
        if (!session()->get('is_login')) {
            return redirect()->to('/');
        };

        $data['ModelClass'] = $this->ModelClass;
        return view('main/classes', $data);
    }

    public function class($kode)
    {


        $class_info = $this->ModelClass->where('kode_kelas', $kode)->first();
        // echo dd($class_info);
        $data['kode_kelas'] = $class_info['kode_kelas'];
        $data['matpel'] = $class_info['matpel'];
        $data['hari'] = $class_info['hari'];
        $data['jam_mulai']  = $class_info['jam_mulai'];
        $data['jam_berakhir']  = $class_info['jam_berakhir'];
        $data['guru'] = $class_info['guru'];
        $data['total_pertemuan'] = $class_info['total_pertemuan'];
        $data['ModelKehadiran'] = $this->ModelKehadiran;



        return view('main/class', $data);
    }

    public function presensi($kode_kelas, $jam_mulai, $jam_berakhir)
    {
        date_default_timezone_set('Asia/Jakarta'); // Set timezone

        $id_murid = session()->get('id');
        $created_at = new DateTime();


        $startTime = new DateTime($jam_mulai . ".00");
        $endTime = new DateTime($jam_berakhir . ".00");
        // dd($startTime);
        // dd($endTime);

        if ($created_at < $startTime || $created_at > $endTime) {
            session()->setFlashdata('msg', 'DIluar jam pelajaran!');
            return redirect()->to(base_url('classes/') . $kode_kelas);
        } elseif('kock'){
            
            session()->setFlashdata('msg', 'Sudah Absen!');
            return redirect()->to(base_url('classes/') . $kode_kelas);
        }
        
        else {
            $data = [
                'kode_kelas' => $kode_kelas,
                'id_murid' => $id_murid,
                'created_at' => $created_at->format('Y-m-d H:i:s')
            ];

            $this->ModelKehadiran->insert($data);

            return redirect()->to(base_url('classes/') . $kode_kelas);
        }
    }
}
