<?php

namespace App\Controllers\NewUser;

use App\Controllers\NewUser\BaseController;
use App\Models\ArtikelModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class ArtikelController extends BaseController
{
    public function artikel()
    {
        helper('text');

        $artikelModel = new ArtikelModel();
        // Define the number of articles to display initially
        $initialLimit = 3;

        // Get all articles
        $allArtikel = $artikelModel->orderBy('created_at', 'desc')->findAll();

        // Get only the first 3 articles for initial display
        $initialArtikel = array_slice($allArtikel, 0, $initialLimit);

        return $this->render('NewUser/artikel/index', [
            'title' => 'Artikel',
            'initialArtikel' => $initialArtikel,
            'allArtikel' => $allArtikel,
            'initialLimit' => $initialLimit
        ]);
    }

    public function all()
    {
        helper('text');
        $model = new ArtikelModel();

        // Get all articles
        $allArtikel = $model->orderBy('created_at', 'desc')->findAll();

        // Pass data to the view
        return $this->render('NewUser/artikel/index', [
            'title' => 'Artikel',
            'initialArtikel' => $allArtikel,
            'allArtikel' => $allArtikel,
            'initialLimit' => count($allArtikel)
        ]);
    }

    public function detail($slug)
    {
        helper('text');

        $model = new ArtikelModel();

        // Fetch the article based on slug
        $artikel = $model->where('slug', $slug)->first();

        if (!$artikel) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Artikel tidak ditemukan');
        }

        // Fetch 3 random recommended articles
        $recommendedArticles = $model->orderBy('RAND()')->findAll(3);

        return $this->render('NewUser/artikel/detail', [
            'title' => 'Detail Artikel',
            'artikel' => $artikel,
            'recommendedArticles' => $recommendedArticles
        ]);
    }
}
