<?php

namespace App\Controllers\admin;

use App\Models\KategoriModel;
use App\Controllers\BaseController;

class Kategori extends BaseController
{
    protected $kategoriModel;

    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
    }

    public function index()
    {
        $data['all_data_kategori'] = $this->kategoriModel->findAll();
        return view('admin/kategori/index', $data);
    }

    public function tambah()
    {
        return view('admin/kategori/tambah');
    }

    public function proses_tambah()
    {
        $this->kategoriModel->save([
            'nama_kategori' => $this->request->getVar("nama_kategori"),
        ]);

        session()->setFlashdata('success', 'Kategori berhasil ditambahkan');
        return redirect()->to(base_url('admin/kategori/index'));
    }

    public function edit($id_kategori)
    {
        $kategoriData = $this->kategoriModel->find($id_kategori);
        return view('admin/kategori/edit', ['kategoriData' => $kategoriData]);
    }

    public function proses_edit($id_kategori)
    {
        $this->kategoriModel->update($id_kategori, [
            'nama_kategori' => $this->request->getVar("nama_kategori"),
        ]);

        session()->setFlashdata('success', 'Kategori berhasil diperbarui');
        return redirect()->to(base_url('admin/kategori/index'));
    }

    public function delete($id_kategori)
    {
        $this->kategoriModel->delete($id_kategori);
        return redirect()->to(base_url('admin/kategori/index'));
    }
}