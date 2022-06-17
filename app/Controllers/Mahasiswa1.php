<?php

namespace App\Controllers;


class Mahasiswa1 extends BaseController
{
    public function index()
    {
        $data = [
            'isicontent' => 'str'
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
