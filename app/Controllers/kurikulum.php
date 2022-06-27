<?php

namespace App\Controllers;


class kurikulum extends BaseController
{
    public function index()
    {
        $data = [
            'isicontent' => 'kurlum'
        ];
        return view('tampil', $data);
    }

}
