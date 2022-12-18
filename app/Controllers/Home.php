<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Menu_Utama');
    }
}