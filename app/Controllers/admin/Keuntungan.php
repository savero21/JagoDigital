<?php

namespace App\Controllers\admin;

use App\Models\KeuntunganModel;
use App\Controllers\BaseController;

class Keuntungan extends BaseController
{
    protected $keuntunganModel;

    public function __construct()
    {
        $this->keuntunganModel = new KeuntunganModel();
    }

    public function index()
    {
        $data['keuntungan'] = $this->keuntunganModel->findAll();
        return view('admin/keuntungan/index', $data);
    }

    public function tambah()
    {
        return view('admin/keuntungan/tambah');
    }

    public function proses_tambah()
    {
        $this->validate([
            'judul_keuntungan' => 'required',
            'deskripsi_keuntungan' => 'required',
            'icon_keuntungan' => 'uploaded[icon_keuntungan]|is_image[icon_keuntungan]|mime_in[icon_keuntungan,image/jpg,image/jpeg,image/png]'
        ]);

        $data = [
            'judul_keuntungan' => $this->request->getPost('judul_keuntungan'),
            'deskripsi_keuntungan' => $this->request->getPost('deskripsi_keuntungan'),
        ];

        // Handle file upload
        $iconKeuntungan = $this->request->getFile('icon_keuntungan');
        if ($iconKeuntungan->isValid() && !$iconKeuntungan->hasMoved()) {
            $iconName = $iconKeuntungan->getRandomName();
            $iconKeuntungan->move('uploads/icons/', $iconName);
            $data['icon_keuntungan'] = $iconName;
        }

        $this->keuntunganModel->save($data);
        session()->setFlashdata('success', 'Data berhasil disimpan');
        return redirect()->to(base_url('admin/keuntungan/index'));
    }

    public function edit($id_keuntungan)
    {
        $data['keuntungan'] = $this->keuntunganModel->find($id_keuntungan);
        return view('admin/keuntungan/edit', $data);
    }

    public function proses_edit($id_keuntungan)
    {
        $this->validate([
            'judul_keuntungan' => 'required',
            'deskripsi_keuntungan' => 'required',
            'icon_keuntungan' => 'is_image[icon_keuntungan]|mime_in[icon_keuntungan,image/jpg,image/jpeg,image/png]'
        ]);

        $data = [
            'judul_keuntungan' => $this->request->getPost('judul_keuntungan'),
            'deskripsi_keuntungan' => $this->request->getPost('deskripsi_keuntungan'),
        ];

        // Handle file upload
        $iconKeuntungan = $this->request->getFile('icon_keuntungan');
        if ($iconKeuntungan->isValid() && !$iconKeuntungan->hasMoved()) {
            $iconName = $iconKeuntungan->getRandomName();
            $iconKeuntungan->move('uploads/icons/', $iconName);
            $data['icon_keuntungan'] = $iconName;
        }

        $this->keuntunganModel->update($id_keuntungan, $data);
        session()->setFlashdata('success', 'Data berhasil diperbarui');
        return redirect()->to(base_url('admin/keuntungan/index'));
    }

    public function delete($id_keuntungan)
    {
        $this->keuntunganModel->delete($id_keuntungan);
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('admin/keuntungan/index'));
    }
}