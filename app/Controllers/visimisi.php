<?php

namespace App\Controllers;


class visimisi extends BaseController
{
    public function index()
    {
        $data = [
            'isicontent' => 'visi'
        ];
        return view('tampil', $data);
    }

}
