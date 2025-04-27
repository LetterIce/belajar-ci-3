<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class UserFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Periksa apakah peran pengguna yang login adalah 'user'
        if (session()->get('role') !== 'user') {
             return redirect()->to('/admin'); // Alihkan non-pengguna (admin) ke halaman lain
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null){}
}