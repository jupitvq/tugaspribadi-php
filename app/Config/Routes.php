<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index',['filter' => 'authGuard']);
$routes->get('/', 'Dashboard::index',['filter' => 'authGuard']);
$routes->get('/', 'SignupController::index');
$routes->get('/register', 'SignupController::index');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/login', 'SigninController::index');
$routes->get('/logout', 'SigninController::logout');
$routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);
$routes->get('/home', 'Home::index',['filter' => 'authGuard']);
$routes->get('/employees', 'EmployeeController::index',['filter' => 'authGuard']);