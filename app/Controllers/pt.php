<?php

namespace App\Controllers;


class pt extends BaseController
{
    public function index()
    {
        $data = [
            'isicontent' => 'hapus'
        ];
        return view('tampil', $data);
    }

}
