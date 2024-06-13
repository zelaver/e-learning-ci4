<?php

namespace App\Controllers;

use App\Models\ModelClass;
use DateTime;
use DateTimeZone;
class Classes extends BaseController
{

    protected $ModelClass;
    public function __construct()
    {
        $this->ModelClass = new ModelClass();
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

       

        return view('main/class', $data);
    }

    public function presensi(){
        $kode_kelas = $this->request->getVar('kode_kelas');
        $id_murid = $this->request->getVar('id_murid');

        date_default_timezone_set('Asia/Jakarta'); // Set timezone
        $currentTime = new DateTime();
        $currentTime = $currentTime->format('Y-m-d H:i:s');

        $created_at = $currentTime;
        dd($created_at);

    }
}
