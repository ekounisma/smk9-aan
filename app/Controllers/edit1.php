<?php

namespace App\Controllers;


class edit1 extends BaseController
{
    public function index()
    {
        $data = [
            'isicontent' => 'ppt'
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
