<?php

namespace App\Controllers;


class Mahasiswa2 extends BaseController
{
    public function index()
    {
        $data = [
            'isicontent' => 'visi'
        ];
        return view('tampil', $data);
    }

    public function update()
    {
        $data = [
            'isicontent' => 'update'
        ];
        return view('tampil', $data);
    }
}
