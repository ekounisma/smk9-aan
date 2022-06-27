<?php

namespace App\Controllers;


class pimpin extends BaseController
{
    public function index()
    {
        $data = [
            'isicontent' => 'ppt'
        ];
        return view('tampil', $data);
    }

}
