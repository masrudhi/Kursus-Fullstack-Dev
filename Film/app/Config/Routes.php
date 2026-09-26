<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

//$routes->get('/', 'Home::index');
$routes->get('home', 'FilmCon::home');
$routes->get('action', 'FilmCon::action');
$routes->get('comedy', 'FilmCon::comedy');
$routes->get('science_fiction', 'FilmCon::science_fiction');
$routes->get('horror', 'FilmCon::horror');

//$routes->get('FilmCon/home', 'FilmCon::home');
//$routes->get('FilmCon/action', 'FilmCon::action');
//$routes->get('FilmCon/comedy', 'FilmCon::comedy');
//$routes->get('FilmCon/science_fiction', 'FilmCon::science_fiction');
//$routes->get('FilmCon/horror', 'FilmCon::horror');
