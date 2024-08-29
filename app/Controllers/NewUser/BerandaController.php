<?php

namespace App\Controllers\NewUser;

use App\Controllers\NewUser\BaseController;
use App\Models\ArtikelModel;
use App\Models\FounderModels;
use App\Models\KategoriVideoModels;
use App\Models\KeuntunganModel;
use App\Models\TentangModels;
use App\Models\VideoPembelajaranModels;
use CodeIgniter\HTTP\ResponseInterface;

class BerandaController extends BaseController
{
   
    public function index()
    {
        // // Start session
        // $session = session();

        // // Print session data
        // var_dump($session->get());
        // die();

        $keuntunganModel = new KeuntunganModel();
        $keuntungan = $keuntunganModel->findAll();

        return $this->render('NewUser/beranda/index', [
            'title' => 'Beranda',
            'keuntungan' => $keuntungan
        ]);
    }

    public function about()
    {
        // Load Tentang Model
        $tentang_model = new TentangModels();
        // Get the first record from Tentang table
        $tentang = $tentang_model->first(); // Returns an object of stdClass

        // Load Founder Model
        $founderModel = new FounderModels();
        // Get all records from Founder table
        $founder = $founderModel->getAllFounders(); // Returns an array of stdClass objects

        // Konversi setiap objek di $founder menjadi array
        $founder = array_map(function ($item) {
            return (array) $item;
        }, $founder);

        return $this->render('NewUser/beranda/about', [
            'tentang' => $tentang,
            'title' => 'Tentang Kami',
            'founder' => $founder
        ]);
    }


    public function artikel()
    {
        helper('text');
        $artikelModel = new ArtikelModel();
        $artikel = $artikelModel->findAll(); // Mengambil semua artikel

        return $this->render('NewUser/beranda/artikel', [
            'title' => 'Artikel',
            'artikel' => $artikel // Mengirim data artikel ke view
        ]);
    }
    public function kontak()
    {
        return $this->render('NewUser/beranda/kontak', [
            'title' => 'Kontak'
        ]);
    }

    public function video()
    {

        $kategoriVideoModels = new KategoriVideoModels();
        $kategoriVideoModels = $kategoriVideoModels->findAll();

        $videoPembelajaranModels = new VideoPembelajaranModels();
        $videoPembelajaranModels = $videoPembelajaranModels->findAll();



        return $this->render('NewUser/beranda/materi-pembelajaran', [
            'title' => 'Video',
            'kategoriVideoModels' => $kategoriVideoModels,
            'videoPembelajaranModels' => $videoPembelajaranModels,

        ]);
    }

    // public function categoryDetails($id_katvideo)
    // {
    //     $data['selectedCategory'] = $this->kategoriVideoModels->find($id_katvideo);
    //     $data['videos'] = $this->videoPembelajaranModels->where('id_katvideo', $id_katvideo)->findAll();
    //     return view('NewUser/video/index_category', $data);
    // }

    // public function videoCategories()
    // {
    //     // Fetch all video categories
    //     $data['videoCategories'] = $this->kategoriVideoModels->findAll();

    //     // Load the view with video categories data
    //     return view('NewUser/layout/header', $data);
    // }
}
