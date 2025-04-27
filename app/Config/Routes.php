<?php

namespace Config;

$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Pengaturan Router
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('AuthController'); // controller default
$routes->setDefaultMethod('login');           // Metode default untuk AuthController
$routes->setTranslateURIDashes(false);
$routes->set404Override();

$routes->get('/', 'AuthController::login'); 
$routes->post('/login/process', 'AuthController::processLogin'); 
$routes->get('/logout', 'AuthController::logout'); 

$routes->group('', ['filter' => 'auth'], static function ($routes) {
    // Rute khusus admin - juga menambahkan filter admin
    $routes->group('admin', ['filter' => 'admin'], static function ($routes) {
        $routes->get('/', 'DashboardController::adminDashboard');
    });
    // Rute khusus pengguna - juga menambahkan filter pengguna
    $routes->group('user', ['filter' => 'user'], static function ($routes) {
         $routes->get('/', 'DashboardController::userDashboard');
    });
});


if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}