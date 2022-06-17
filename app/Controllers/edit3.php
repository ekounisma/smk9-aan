<?php

namespace App\Controllers;


class edit3 extends BaseController
{
    public function index()
    {
        $data = [
            'isicontent' => 'lpt'
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
