<?php

namespace App\Controllers;


class kelas extends BaseController
{
    public function index()
    {
        $data = [
            'isicontent' => 'rkls'
        ];
        return view('tampil', $data);
    }

}
