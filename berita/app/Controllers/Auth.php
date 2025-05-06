<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/Auth/login');
    }

    public function do_login()
    {
        $model = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cek apakah username ada di database
        $user = $model->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Menyimpan data user di session
            session()->set([
                'id' => $user['id'],
                'username' => $user['username'],
                'role' => $user['role'],
                'isLoggedIn' => true,
            ]);

            // Redirect berdasarkan role
            if ($user['role'] == 'admin') {
                return redirect()->to('/admin'); // Arahkan ke dashboard admin
            } elseif ($user['role'] == 'penulis') {
                return redirect()->to('/penulis'); // Arahkan ke dashboard penulis
            } else {
                return redirect()->to('/'); // Arahkan ke halaman user
            }
        } else {
            // Jika login gagal, beri pesan error
            session()->setFlashdata('error', 'Username atau password salah');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        // Hapus session user dan redirect ke login page
        session()->destroy();
        return redirect()->to('/login');
    }
}
