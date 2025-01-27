<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Auth::index');
$routes->get('logout', 'Auth::logout');
$routes->post('/autentikasi', 'Auth::autentikasi');

// Route Group untuk admin
$routes->group('Admin', ['filter' => 'level_pengguna:admin'], function(RouteCollection $routes) {
    $routes->get('dashboard', 'Admin::index');  // Menampilkan daftar pengguna admin
    $routes->get('coba', 'Admin::coba');  // Menampilkan daftar pengguna admin
    $routes->get('Vdatapengguna','admin::Vdatapengguna');
    $routes->get('Vdatamapel','admin::Vdatamapel');
    $routes->get('Vdatakelas','admin::Vdatakelas');
    $routes->get('Vdatasiswa','admin::Vdatasiswa');
    $routes->get('Vdatakatsoal','admin::Vdatakatsoal');
    $routes->get('Vdatasoal','admin::Vdatasoal');
    $routes->get('Vdataujian','admin::Vdataujian');
    $routes->get('Vujiansiswa','admin::Vujiansiswa');
    // routes.php
$routes->post('/admin/tambah_pengguna', 'AdminController::tambah_pengguna');

});

// Route Group untuk guru
$routes->group('Guru', ['filter' => 'level_pengguna:guru'], function(RouteCollection $routes) {
    $routes->get('dashboard', 'Guru::index');  // Menampilkan daftar kursus
    $routes->get('Vdatasiswa','guru::Vdatasiswa');
    $routes->get('Vdatakatsoal','guru::Vdatakatsoal');
    $routes->get('Vdatasoal','guru::Vdatasoal');
    $routes->get('Vdataujian','guru::Vdataujian');
    $routes->get('Vujiansiswa','guru::Vujiansiswa');
});

// Route Group untuk siswa
$routes->group('Siswa', ['filter' => 'level_pengguna:siswa'], function(RouteCollection $routes) {
    $routes->get('dashboard', 'Siswa::index');  // Menampilkan tugas siswa
    $routes->get('Vdataujian','siswa::Vdataujian');
    $routes->get('soalujian/(:num)', 'siswa::soalujian/$1');
    $routes->get('Vinfonilai','siswa::Vinfonilai');
});