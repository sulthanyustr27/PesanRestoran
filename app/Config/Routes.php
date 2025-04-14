<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('pages/sate', 'Home::sate');
$routes->get('pages/sakuraBento', 'Home::sakuraBento');
$routes->get('head/admin', 'Home::admin');
$routes->get('pages/igaBakar', 'Home::igaBakar');
$routes->get('pages/ayamGepuk', 'Home::ayamGepuk');
$routes->get('pages/pasta', 'Home::pasta');