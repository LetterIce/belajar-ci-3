<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function adminDashboard()
    {
        $session = session();
        // Persiapkan data untuk tampilan
        $data = [
            'pageTitle' => 'Admin Dashboard',
            'username' => $session->get('username'),
            'role' => $session->get('role')
        ];
        return view('admin_dashboard', $data);
    }

    public function userDashboard()
    {
         $session = session();
         // Persiapkan data untuk tampilan
         $data = [
            'pageTitle' => 'User Dashboard',
            'username' => $session->get('username'),
            'role' => $session->get('role')
         ];
         return view('user_dashboard', $data);
    }
}