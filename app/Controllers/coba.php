<?php

namespace App\Controllers;

class coba extends BaseController
{
    public function index()
    {
       return view('welcome_message');
    }

    public function coba()
    {
        echo "Hello word!";
    }
}
