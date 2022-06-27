<?php

namespace App\Controllers;


class struktur extends BaseController
{
    public function index()
    {
        $data = [
            'isicontent' => 'str'
        ];
        return view('tampil', $data);
    }

}
