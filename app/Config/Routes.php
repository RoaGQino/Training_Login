<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Login::index');
$routes->get('/confirm', 'confirm::index');

$routes->get('/forgotPassword', 'forgotPassword::index');
$routes->get('/reg', 'Reg::index');
$routes->get('/profile', 'profile::index');
$routes->post('/login', 'Login::do_login');
$routes->post('/reg', 'Reg::do_reg');
$routes->post('/forgotPassword', 'forgotPassword::do_forgotPassword');
$routes->post('/profile', 'profile::resetPassword');
$routes->get('confirm/(:any)', 'Reg::confirmAccount/$1');


