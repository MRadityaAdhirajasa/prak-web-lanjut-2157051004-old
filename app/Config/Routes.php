<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/profile', [Home::class, 'profile']);
$routes->get('/profile/(:any)/(:any)/(:any)', 'Home::profile/$1/$2/$3');



