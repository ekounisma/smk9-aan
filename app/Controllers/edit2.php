<?php

namespace App\Controllers;


class edit2 extends BaseController
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
