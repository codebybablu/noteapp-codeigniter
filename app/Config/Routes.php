<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('notes', 'Note::index');
$routes->get('notes/create', 'Note::create');
$routes->post('notes/store', 'Note::store');
$routes->get('notes/edit/(:num)', 'Note::edit/$1');
$routes->post('notes/update/(:num)', 'Note::update/$1');
$routes->get('notes/delete/(:num)', 'Note::delete/$1');