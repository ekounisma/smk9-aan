<?php

namespace App\Controllers;

use App\Models\Mhs_Model;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $mhs = new Mhs_Model();
        $datamhs = $mhs->findAll();
        $data = [
            'mhs' => $datamhs,
            'isicontent' => 'profile'
        ];
        return view('tampil', $data);
    }

    public function update()
    {
        $mhs = new Mhs_Model();
        $datamhs = $mhs->findAll();
        $data = [
            'mhs' => $datamhs,
            'isicontent' => 'update'
        ];
        return view('tampil', $data);
    }
}
