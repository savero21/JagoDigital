<?php

namespace App\Controllers\NewUser;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class BerandaController extends BaseController
{
    public function index()
    {
        return view('NewUser/beranda/index', [
            'title' => 'Beranda'
        ]);
    }

    public function about()
    {
        return view('NewUser/beranda/about', [
            'title' => 'Tentang Kami'
        ]);
    }
}
