<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Content::index');

$routes->get('/karyaIlmiah', 'Content::karyaIlmiah');
$routes->get('/karyaIlmiah/artikel', 'Content::artikel');
$routes->get('/karyaIlmiah/opini', 'Content::opini');
$routes->get('/karyaIlmiah/buku', 'Content::buku');
$routes->get('/karyaIlmiah/jurnal', 'Content::jurnal');
$routes->get('/karyaIlmiah/kliping', 'Content::kliping');
$routes->get('/detail_karyaIlmiah/(:num)', 'Content::detail_karyaIlmiah/$1');


$routes->get('/profil', 'Content::profil');
$routes->get('/news', 'Content::news');
$routes->get('/infoAkademik', 'Content::infoAkademik');
$routes->get('/ushuludinToday', 'Content::ushuludinToday');
$routes->get('/glosaria', 'Content::glosaria');
$routes->get('/vidio', 'Content::vidio');
$routes->get('/foto', 'Content::foto');
$routes->get('/about', 'Content::about');
$routes->get('/karir', 'Content::karir');
$routes->get('/kontak', 'Content::kontak');


// index admin
// $routes->group('', ['filter' => 'login'], function($routes){
    $routes->get('/indexAdmin', 'Admin::index');
// });


// artikel
$routes->get('/artikelFU', 'Artikel::index');
$routes->post('/artikel/save', 'Artikel::save');
$routes->delete('/artikel/delete/(:num)', 'Artikel::delete/$1');
$routes->get('/artikel/detail/(:segment)', 'Artikel::detail/$1');
$routes->get('/artikel/edit/(:segment)', 'Artikel::edit/$1');

// foto
$routes->get('/fotoFU', 'Foto::index');
$routes->post('/foto/save', 'Foto::save');
$routes->delete('/foto/delete/(:num)', 'Foto::delete/$1');
$routes->delete('/foto/edit/(:any)', 'Foto::edit/$1');


// vidio
$routes->get('/vidioFU', 'Vidio::index');
$routes->post('/vidio/save', 'Vidio::save');
$routes->delete('/vidio/delete/(:num)', 'Vidio::delete/$1');
$routes->delete('/vidio/edit/(:any)', 'Vidio::edit/$1');





// $routes->get('/statistik', 'admin::statistik');
// $routes->get('/berita', 'admin::berita');
// $routes->get('/vidioFakultas', 'admin::vidio');
// $routes->get('/fotoFakultas', 'admin::foto');
// $routes->get('/kabarAlumni', 'admin::kabarAlumni');
// $routes->get('/inspirasiPagi', 'admin::inspirasiPagi');
// $routes->get('/artikel', 'admin::artikel');
// $routes->get('/event', 'admin::event');
/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}