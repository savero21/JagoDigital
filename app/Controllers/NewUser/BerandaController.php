<?php

namespace App\Controllers\NewUser;

use App\Controllers\NewUser\BaseController;
use App\Models\TentangModels;
use CodeIgniter\HTTP\ResponseInterface;

class BerandaController extends BaseController
{
    public function index()
    {
        return $this->render('NewUser/beranda/index', [
            'title' => 'Beranda'
        ]);
    }

    public function about()
    {
        $tentang_model = new TentangModels();
        $tentang = $tentang_model->first();
        return $this->render('NewUser/beranda/about', [
            'tentang' => $tentang,
            'title' => 'Tentang Kami'
        ]);
    }


    public function artikel()
    {
        return view('NewUser/beranda/artikel', [
            'title' => 'Artikel'
        ]);
    }

    public function video()
    {
        return view('NewUser/beranda/materi-pembelajaran', [
            'title' => 'Video'
        ]);
    }
}
