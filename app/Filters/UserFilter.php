<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class UserFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Assumes AuthFilter has already run
        // Check if the logged-in user's role is 'user'
        if (session()->get('role') !== 'user') {
             // If not a 'user' (might be admin trying to access user-only page), redirect to admin dashboard
             session()->setFlashdata('error', 'You do not have permission to access this user page.');
             return redirect()->to('/admin'); // Redirect non-users (admins) away
        }
         // If user, continue
        return $request;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No action needed after
    }
}