<?php

namespace App\Controllers;


class dftrmhs extends BaseController
{
    public function index()
    {
        $data = [
            'isicontent' => 'dftrmhs'
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
