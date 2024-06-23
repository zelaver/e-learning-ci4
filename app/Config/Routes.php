<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');

$routes->get('pengumuman', 'Pengumuman::index');

$routes->get('classes', 'Classes::index');
$routes->get('classes/(:num)', 'Classes::class/$1');
$routes->post('presensi/(:num)', 'Classes::presensi/$1');
$routes->get('downloadMateri/(:segment)/(:segment)', 'Classes::downloadMateri/$1/$2');

$routes->get('task', 'Task::index');
$routes->get('task/(:num)', 'Task::task/$1');
$routes->get('task/(:num)', 'Task::task/$1');
$routes->post('kirimTugas/(:num)', 'Task::kirimTugas/$1');

$routes->get('profile', 'Profile::index');
$routes->post('profile/simpan', 'Profile::simpan');

$routes->get('login', 'Login::index');
$routes->post('login', 'Login::login');
$routes->get('logout', 'Login::logout');

$routes->get('register', 'Register::index');
$routes->post('register', 'Register::register');

// Admin Routes
$routes->get('ClassesData', 'Admin::classesData');
$routes->get('ClassesDataSave', 'Admin::classesDataSave');
$routes->post('ClassesDataSave', 'Admin::classesDataSave');
$routes->get('ClassesDataEdit/(:num)', 'Admin::classesDataEdit/$1');
$routes->get('ClassesDataDelete/(:num)', 'Admin::classesDataDelete/$1');
