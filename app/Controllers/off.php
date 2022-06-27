<?php

namespace App\Controllers;


class off extends BaseController
{
    public function index()
    {
        $data = [
            'isicontent' => 'offering'
        ];
        return view('tampil', $data);
    }

}
