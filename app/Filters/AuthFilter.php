<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Periksa apakah pengguna sudah login
        if (!session()->get('isLoggedIn')) {
            // Jika belum login, alihkan ke halaman login
            session()->setFlashdata('error', 'You must be logged in to access this page.');
            return redirect()->to('/');
        }
        // Jika sudah login, lanjutkan dengan permintaan
        return $request;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null){}
}