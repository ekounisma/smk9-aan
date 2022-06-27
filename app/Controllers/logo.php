<?php

namespace App\Controllers;


class logo extends BaseController
{
    public function index()
    {
        $data = [
            'isicontent' => 'lpt'
        ];
        return view('tampil', $data);
    }

}
