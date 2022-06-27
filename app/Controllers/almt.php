<?php

namespace App\Controllers;


class almt extends BaseController
{
    public function index()
    {
        $data = [
            'isicontent' => 'apt'
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
