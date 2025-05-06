<?php

namespace App\Controllers;
use App\Models\BeritaModel;

class Penulis extends BaseController
{
    protected $beritaModel;

    public function __construct()
    {
        $this->beritaModel = new BeritaModel();
    }

    public function index()
    {
        $berita = $this->beritaModel
            ->orderBy('created_at', 'DESC')
            ->findAll();

        return view('penulis/post/dashboard', [
            'title' => 'Dashboard Penulis',
            'posts' => $berita
        ]);
    }

    public function create()
    {
        return view('penulis/post/create', [
            'title' => 'Tulis Berita'
        ]);
    }

    public function store()
    {
        $file = $this->request->getFile('featured_image');
        $filename = null;

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $filename = $file->getRandomName();
            $file->move('uploads', $filename);
        }

        $this->beritaModel->save([
            'title'   => $this->request->getPost('title'),
            'slug'    => url_title($this->request->getPost('title'), '-', true),
            'content' => $this->request->getPost('content'),
            'featured_image' => $filename,
        ]);

        return redirect()->to('/penulis')->with('success', 'Berita berhasil disimpan.');
    }

    public function edit($id)
    {
        $post = $this->beritaModel->find($id);

        if (!$post) {
            return redirect()->to('/penulis');
        }

        return view('penulis/post/update', [
            'title' => 'Edit Berita',
            'post' => $post
        ]);
    }

    public function update($id)
    {
        $post = $this->beritaModel->find($id);
        $file = $this->request->getFile('featured_image');
        $filename = $post['featured_image'];

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $filename = $file->getRandomName();
            $file->move('uploads', $filename);
        }

        $this->beritaModel->update($id, [
            'title'   => $this->request->getPost('title'),
            'slug'    => url_title($this->request->getPost('title'), '-', true),
            'content' => $this->request->getPost('content'),
            'featured_image' => $filename,
        ]);

        return redirect()->to('/penulis')->with('success', 'Berita berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->beritaModel->delete($id);
        return redirect()->to('/penulis')->with('success', 'Berita berhasil dihapus.');
    }
}
