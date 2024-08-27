<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ArtikelModel;

class ArtikelController extends BaseController
{
    protected $artikelModel;

    public function __construct()
    {
        $this->artikelModel = new ArtikelModel();
    }

    public function index()
    {
        // Mengambil semua data artikel dari tabel tb_artikel
        $all_data_artikel = $this->artikelModel->orderBy('created_at', 'DESC')->findAll();

        // Mengirimkan data artikel ke view
        $data = [
            'all_data_artikel' => $all_data_artikel,
        ];

        return view('/admin/artikel/index', $data);
    }

    public function create()
    {
        $kategori = [
            1 => 'Teknologi',
            2 => 'Pendidikan',
            3 => 'Kesehatan',
            // Tambahkan kategori lain sesuai dengan yang ada di database
        ];

        $data = [
            'kategori' => $kategori
        ];
        return view('/admin/artikel/tambah', $data);
    }

    public function store()
    {
        // Validasi input
        if (!$this->validate([
            'judul_artikel' => 'required',
            'kategori' => 'required',
            'foto_artikel' => 'uploaded[foto_artikel]|mime_in[foto_artikel,image/jpg,image/jpeg,image/png]|max_size[foto_artikel,2048]',
            'deskripsi_artikel' => 'required',
            'tags' => 'required',
            'slug' => 'required|is_unique[tb_artikel.slug]'
        ])) {
            return redirect()->back()->withInput()->with('error', 'Validasi gagal.');
        }

        // Handle file upload
        $fotoArtikel = $this->request->getFile('foto_artikel');
        $fotoArtikelName = $fotoArtikel->getRandomName();
        $fotoArtikel->move('uploads/upload_artikel', $fotoArtikelName);

        // Insert data
        $this->artikelModel->save([
            'id_kategori' => $this->request->getVar('kategori'),
            'judul_artikel' => $this->request->getVar('judul_artikel'),
            'foto_artikel' => $fotoArtikelName,
            'deskripsi_artikel' => $this->request->getVar('deskripsi_artikel'),
            'tags' => $this->request->getVar('tags'),
            'slug' => $this->request->getVar('slug'),
            'views' => 0, // Set default views to 0
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to(base_url('admin/artikel/index'))->with('success', 'Artikel berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $artikel = $this->artikelModel->find($id);

        if (!$artikel) {
            return redirect()->to('/admin/artikel/edit')->with('error', 'Artikel tidak ditemukan.');
        }

        // Daftar kategori yang dapat dipilih
        $kategori = [
            1 => 'Teknologi',
            2 => 'Pendidikan',
            3 => 'Kesehatan'
        ];

        $data = [
            'artikel' => $artikel,
            'kategori' => $kategori
        ];

        return view('/admin/artikel/edit', $data);
    }

    public function update($id)
    {
        $model = new ArtikelModel();
        $artikel = $model->find($id);

        // Inisialisasi array $data untuk menyimpan data yang akan diupdate
        $data = [];

        // Mendapatkan file yang diunggah
        $file = $this->request->getFile('foto_artikel');

        // Mengecek apakah ada file yang diunggah
        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Validasi jenis file
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif']; // Daftar tipe file yang diizinkan
            if (in_array($file->getMimeType(), $allowedTypes)) {
                // Nama file baru
                $newFileName = $file->getRandomName();

                // Pindahkan file ke folder uploads
                $file->move('uploads/upload_artikel/', $newFileName);

                // Tambahkan nama file baru ke data yang akan diupdate
                $data['foto_artikel'] = $newFileName;
            } else {
                return redirect()->back()->with('error', 'Format file tidak diizinkan.');
            }
        }

        // Mendapatkan data dari input form
        $data['judul_artikel'] = $this->request->getPost('judul_artikel');
        $data['id_kategori'] = $this->request->getPost('id_kategori');
        $data['deskripsi_artikel'] = $this->request->getPost('deskripsi_artikel');
        $data['tags'] = $this->request->getPost('tags');
        $data['slug'] = $this->request->getPost('slug');

        // Memastikan data tidak kosong sebelum melakukan update
        // Jika hanya foto yang diupload, update hanya foto_artikel
        if (!empty($data['foto_artikel']) || !empty($data['judul_artikel']) || !empty($data['id_kategori']) || !empty($data['deskripsi_artikel']) || !empty($data['tags']) || !empty($data['slug'])) {
            $model->update($id, $data);
            return redirect()->to('/admin/artikel/index')->with('success', 'Artikel berhasil diperbarui.');
        } else {
            return redirect()->to('/admin/artikel/index')->with('error', 'Tidak ada data yang diubah.');
        }
    }

    public function delete($id_artikel)
    {
        // Temukan artikel berdasarkan ID
        $artikel = $this->artikelModel->find($id_artikel);

        if ($artikel) {
            // Hapus file gambar
            $pathToFile = 'uploads/upload_artikel/' . $artikel['foto_artikel'];
            if (file_exists($pathToFile)) {
                unlink($pathToFile);
            }

            // Hapus data dari database
            $this->artikelModel->delete($id_artikel);

            return redirect()->to(base_url('admin/artikel/index'))->with('success', 'Artikel berhasil dihapus.');
        } else {
            return redirect()->to(base_url('admin/artikel/index'))->with('error', 'Artikel tidak ditemukan.');
        }
    }
}
