<?php

namespace App\Controllers;


class kosong extends BaseController
{
    public function index()
    {
        $data = [
            'isicontent' => 'kosong'
        ];
        return view('tampil', $data);
    }

}
