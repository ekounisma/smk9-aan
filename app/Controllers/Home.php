<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = ['isicontent' => '/coba/content'];
        return view('login', $data);
    }

    public function about()
    {
        echo view('coba/navbar');
        echo view('coba/sidebar');
        echo view('coba/footer');
        echo view('coba/content');
    }
}
