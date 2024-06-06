<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');

$routes->get('pengumuman', 'Pengumuman::index');

$routes->get('class', 'Classes::index');

$routes->get('task', 'Task::index');

$routes->get('profile', 'Profile::index');
$routes->post('profile/simpan', 'Profile::simpan');

$routes->get('login', 'Login::index');
$routes->post('login', 'Login::login');
$routes->get('logout', 'Login::logout');

$routes->get('register', 'Register::index');
$routes->post('register', 'Register::register');