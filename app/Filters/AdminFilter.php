<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AdminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Assumes AuthFilter has already run (applied in routes)
        // Check if the logged-in user's role is 'admin'
        if (session()->get('role') !== 'admin') {
             // If not admin, redirect to user dashboard (or show error)
             session()->setFlashdata('error', 'You do not have permission to access the admin area.');
             return redirect()->to('/user'); // Redirect non-admins away
        }
         // If admin, continue
        return $request;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No action needed after
    }
}