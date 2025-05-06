<?php

namespace App\Controllers;

use App\Models\BeritaModel;

class User extends BaseController
{
    protected $beritaModel;

    public function __construct()
    {
        $this->beritaModel = new BeritaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'berita' => $this->beritaModel->orderBy('created_at', 'DESC')->findAll()
        ];
        return view('user/layout/header', $data)
            . view('user/beranda/home', $data)
            . view('user/layout/footer');
    }

    public function detail($slug)
    {
    if (!session()->has('isLoggedIn')) {
        return redirect()->to('/login');
    }

    $berita = $this->beritaModel->where('slug', $slug)->first();
    if (!$berita) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Berita tidak ditemukan.");
    }

    $data = [
        'title' => $berita['title'],
        'berita' => $berita
    ];
    return view('user/layout/header', $data)
        . view('user/beranda/detail', $data)
        . view('user/layout/footer');
    }
}
