<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AdminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Periksa apakah peran pengguna yang login adalah 'admin'
        if (session()->get('role') !== 'admin') {
             return redirect()->to('/user'); // Alihkan non-admin ke halaman lain
        }
         // Jika admin, lanjutkan
        return $request;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null){}
}