<?php

namespace App\Controllers;


class dosen extends BaseController
{
    public function index()
    {
        $data = [
            'isicontent' => 'dosen'
        ];
        return view('tampil', $data);
    }

}
