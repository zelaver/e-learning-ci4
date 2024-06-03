<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');

$routes->get('pengunguman', 'Pengunguman::index');

$routes->get('class', 'Classes::index');

$routes->get('task', 'Task::index');

$routes->get('profile', 'Profile::index');

$routes->get('login', 'Login::index');

$routes->get('register', 'Register::index');
$routes->post('register', 'Register::register');