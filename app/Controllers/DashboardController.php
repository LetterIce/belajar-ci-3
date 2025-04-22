<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function adminDashboard()
    {
        $session = session();
        // Prepare data for the view (Requirement 5)
        $data = [
            'pageTitle' => 'Admin Dashboard',
            'username' => $session->get('username'),
            'role' => $session->get('role'),
            'extraAdminInfo' => 'This is some specific information only for admins.'
            // You can add more admin-specific data here
        ];
        // Load the view, passing data
        return view('admin_dashboard', $data);
    }

    public function userDashboard()
    {
         $session = session();
         // Prepare data for the view (Requirement 5)
         $data = [
            'pageTitle' => 'User Dashboard',
            'username' => $session->get('username'),
            'role' => $session->get('role'),
            'extraUserInfo' => 'Welcome, valued user! Here is your specific content.'
             // You can add more user-specific data here
         ];
        // Load the view, passing data
         return view('user_dashboard', $data);
    }
}