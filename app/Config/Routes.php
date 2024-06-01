<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pengunguman::index');
$routes->get('pengunguman', 'Pengunguman::index');
$routes->get('class', 'Classes::index');
$routes->get('task', 'Task::index');
