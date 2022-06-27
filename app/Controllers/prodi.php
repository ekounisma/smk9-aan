<?php

namespace App\Controllers;


class prodi extends BaseController
{
    public function index()
    {
        $data = [
            'isicontent' => 'fakultas'
        ];
        return view('tampil', $data);
    }

}
