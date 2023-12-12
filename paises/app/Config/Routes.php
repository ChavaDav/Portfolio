<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home/pagina2', 'Home::pagina2');
$routes->get('home/pagina3', 'Home::pagina3');

