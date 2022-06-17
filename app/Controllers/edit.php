<?php

namespace App\Controllers;


class edit extends BaseController
{
    public function index()
    {
        $data = [
            'isicontent' => 'hapus'
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
