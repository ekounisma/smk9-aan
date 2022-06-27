<?php

namespace App\Controllers;


class msprodi extends BaseController
{
    public function index()
    {
        $data = [
            'isicontent' => 'ms'
        ];
        return view('tampil', $data);
    }

}
