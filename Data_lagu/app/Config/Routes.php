<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// --------------------------------------------------------------------
// Router Setup
// --------------------------------------------------------------------
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Lagu');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false); // Tetap false karena kita pakai route manual

// --------------------------------------------------------------------
// Route Definitions
// --------------------------------------------------------------------

$routes->get('/', 'Lagu::index');
$routes->post('lagu', 'Lagu::index');
$routes->get('lagu/add', 'Lagu::add');
$routes->post('lagu/store', 'Lagu::store');

$routes->get('Lagu/add', 'Lagu::add');
$routes->post('Lagu/store', 'Lagu::store');

$routes->get('Lagu', 'Lagu::index');
$routes->post('Lagu', 'Lagu::index');
$routes->get('Lagu/index', 'Lagu::index');
$routes->get('Lagu/add', 'Lagu::add');
$routes->post('Lagu/store', 'Lagu::store');

// --------------------------------------------------------------------
// Additional Routing
// --------------------------------------------------------------------
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}