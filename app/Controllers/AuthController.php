<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    // Data pengguna yang sudah ditetapkan
    private $users = [
        'admin' => [
            'id' => 1,
            'username' => 'andy',
            'password_hash' => '$2a$12$FtntWwwClt9jeMaTLmw6neviSwcYOsE47kjEPgY6WDG8LLfEVlzGu', // Hash 'andy123'
            'role' => 'admin'
        ],
        'user' => [
            'id' => 2,
            'username' => 'budi',
            'password_hash' => '$2a$12$R5KA13UPCQz0IYkt3lsRGOPpDehCgHztx9syGbCgGNjLKl8EJgAEe', // Hash 'budi123'
            'role' => 'user'
        ]
    ];

    public function login()
    {
        // Jika sudah login, alihkan ke dashboard
        if (session()->get('isLoggedIn')) {
            $role = session()->get('role');
            return redirect()->to('/' . $role);
        }
        // Tampilkan halaman login
        return view('login');
    }

    public function processLogin()
    {
        $session = session();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cari pengguna berdasarkan username
        $user = null;
        foreach ($this->users as $userData) {
            if ($userData['username'] === $username) {
                $user = $userData;
                break;
            }
        }

        // Verifikasi pengguna dan kata sandi (Persyaratan 4)
        if ($user && password_verify($password, $user['password_hash'])) {
            // Atur data sesi (Persyaratan 4)
            $sessionData = [
                'user_id' => $user['id'],
                'username' => $user['username'],
                'role' => $user['role'],
                'isLoggedIn' => true,
            ];
            $session->set($sessionData);

            // Alihkan berdasarkan peran (Persyaratan 4)
            if ($user['role'] === 'admin') {
                return redirect()->to('/admin');
            } else {
                return redirect()->to('/user');
            }
        } else {
            // Atur pesan flash untuk kesalahan dan kembali ke halaman login
            $session->setFlashdata('error', 'Invalid username or password.');
            return redirect()->to('/');
        }
    }

    public function logout()
    {
        session()->destroy(); // Hapus data sesi
        return redirect()->to('/'); // Alihkan ke halaman login
    }
}