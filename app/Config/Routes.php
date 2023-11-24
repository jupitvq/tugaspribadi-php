<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index',['filter' => 'authGuard']);
$routes->get('/', 'Dashboard::index',['filter' => 'authGuard']);
$routes->get('/', 'SignupController::index');
$routes->get('/home', 'Home::index',['filter' => 'authGuard']);


$routes->get('/register', 'SignupController::index');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/login', 'SigninController::index');
$routes->get('/logout', 'SigninController::logout');
$routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);


$routes->get('/karyawan', 'EmployeeController::index',['filter' => 'authGuard']);

$routes->get('/karyawan/tambah', 'EmployeeController::add',['filter' => 'authGuard']);
$routes->add('/karyawan/tambah/baru', 'EmployeeController::create',['filter' => 'authGuard']);

$routes->get('/karyawan/ubah/(:segment)', 'EmployeeController::ubah/$1',['filter' => 'authGuard']);
$routes->add('/karyawan/ubah/update/(:segment)', 'EmployeeController::update/$1',['filter' => 'authGuard']);

$routes->get('/karyawan/hapus/(:segment)', 'EmployeeController::hapus/$1',['filter' => 'authGuard']);