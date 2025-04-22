<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    // Hardcoded user data (Requirement 4)
    // In a real app, fetch this from a database
    private $users = [
        'admin' => [
            'id' => 1,
            'username' => 'admin',
            // Generate hash using: echo password_hash('adminpass', PASSWORD_DEFAULT);
            'password_hash' => '$2a$12$bgOkvly8/SHA9xR7CYk/h.2KMBjXbNDNYNn4NeVIPfZCciTZMzFla', // Hashed 'adminpass'
            'role' => 'admin'
        ],
        'user' => [
            'id' => 2,
            'username' => 'user',
             // Generate hash using: echo password_hash('userpass', PASSWORD_DEFAULT);
            'password_hash' => '$2a$12$.a0wUnKezGEOqI2baDoyeeRqzl.c9Sne9DiYAMT/wWwlV3GbEY8nS', // Hashed 'userpass'
            'role' => 'user'
        ]
    ];

    public function login()
    {
        // If already logged in, redirect to dashboard
        if (session()->get('isLoggedIn')) {
            $role = session()->get('role');
            return redirect()->to('/' . $role);
        }
        // Show the login view
        return view('login');
    }

    public function processLogin()
    {
        $session = session();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Find user by username
        $user = null;
        foreach ($this->users as $userData) {
            if ($userData['username'] === $username) {
                $user = $userData;
                break;
            }
        }

        // Verify user and password (Requirement 4)
        if ($user && password_verify($password, $user['password_hash'])) {
            // Set session data (Requirement 4)
            $sessionData = [
                'user_id' => $user['id'],
                'username' => $user['username'],
                'role' => $user['role'],
                'isLoggedIn' => true,
            ];
            $session->set($sessionData);

            // Redirect based on role (Requirement 4)
            if ($user['role'] === 'admin') {
                return redirect()->to('/admin');
            } else {
                return redirect()->to('/user');
            }
        } else {
            // Set flash message for error and redirect back to login
            $session->setFlashdata('error', 'Invalid username or password.');
            return redirect()->to('/');
        }
    }

    public function logout()
    {
        session()->destroy(); // Destroy session data
        return redirect()->to('/'); // Redirect to login page
    }
}