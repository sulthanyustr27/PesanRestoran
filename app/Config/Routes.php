<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('pages/sate', 'Home::sate');
$routes->get('pages/sakuraBento', 'Home::sakuraBento');
$routes->get('layout/admin', 'Home::admin');

