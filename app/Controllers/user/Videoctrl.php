<?php

namespace App\Controllers\user;

use App\Controllers\BaseController;
use App\Models\videoPembelajaranModels;
use App\Models\KategoriVideoModels;
use App\Models\MemberModels;
use App\Models\DPDModels;


class Videoctrl extends BaseController
{
    private $videoPembelajaranModels;
    private $kategoriVideoModels;
    private $memberModels;
    private $DPDModels;

    public function __construct()
    {
        $this->videoPembelajaranModels = new videoPembelajaranModels();
        $this->kategoriVideoModels = new KategoriVideoModels();
        $this->memberModels = new MemberModels();
        $this->DPDModels = new DPDModels();

    }

    // Method to list video categories
    public function index()
    {
        $data = [
            'videoCategories' => $this->kategoriVideoModels->findAll(),
            'videos' => $this->videoPembelajaranModels->findAll(),
            'memberCategories' => $this->memberModels->findAll(), // Fetch member categories
            'dpd' => $this->DPDModels->findAll(),

        ];

        return view('user/video/index', $data);
    }

    // Method to view video details
    public function detail($id)
    {
        $data['video'] = $this->videoPembelajaranModels->find($id);
        $data['related_videos'] = $this->videoPembelajaranModels->where('id_katvideo', $data['video']['id_katvideo'])->where('id_video !=', $id)->findAll();
        $data['memberCategories'] = $this->memberModels->findAll(); // Fetch member categories
        $data['dpd'] = $this->DPDModels->findAll(); // Fetch member categories

        // Tampilkan 404 error jika data tidak ditemukan
        if (!$data['video']) {
            throw PageNotFoundException::forPageNotFound();
        }

        return view('user/video/detail', $data);
    }

    // Method to list videos by category
    public function indexByCategory($id_katvideo)
    {
        $data = [
            'videoCategories' => $this->kategoriVideoModels->findAll(),
            'videos' => $this->videoPembelajaranModels->where('id_katvideo', $id_katvideo)->findAll(),
            'dpd' => $this->DPDModels->findAll(),

        ];

        return view('user/video/index', $data);
    }
}