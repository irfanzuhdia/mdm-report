<?php

namespace Config;

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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/aktivitas', 'Aktivitas::index');
$routes->get('/aktivitas/tambah', 'Aktivitas::tambah');
$routes->post('/aktivitas/proses', 'Aktivitas::proses');
$routes->get('aktivitas/edit/(:num)', 'Aktivitas::edit/$1');
$routes->post('aktivitas/update/(:num)', 'Aktivitas::update/$1');
$routes->get('aktivitas/delete/(:num)', 'Aktivitas::delete/$1');
$routes->get('/aset', 'Aset::index');
$routes->get('aset/pinjam/(:num)', 'Aset::pinjam/$1');
$routes->post('aset/prosespinjam', 'Aset::prosespinjam');
$routes->get('aset/pinjam/edit/(:num)', 'Aset::pinjamedit/$1');
$routes->post('aset/pinjam/update/(:num)', 'Aset::pinjamupdate/$1');
$routes->get('aset/pinjam/delete/(:num)', 'Aset::pinjamdelete/$1');
$routes->get('/profile', 'Profile::index');
$routes->get('profile/edit/(:any)', 'Profile::edit/$1');
$routes->post('profile/update/(:any)', 'Profile::update/$1');

$routes->group('admin', function($routes){
	$routes->get('home', 'Home::index2');
	$routes->get('aktivitas', 'Aktivitas::indexadmin');
	$routes->get('daftarpegawai', 'Pegawai::index');
	$routes->get('tambahpegawai', 'Pegawai::tambah');
	$routes->post('tambahpegawai/process', 'Pegawai::process');
	$routes->get('pegawai/edit/(:any)', 'Pegawai::edit/$1');
	$routes->post('pegawai/update/(:any)', 'Pegawai::update/$1');	
	$routes->get('pegawai/delete/(:any)', 'Pegawai::delete/$1');
	$routes->get('aset', 'Aset::indexadmin');
	$routes->get('aset/request', 'Aset::request');

	$routes->post('aset/request/acc/(:num)', 'Aset::requestacc/$1');
	$routes->post('aset/request/dec/(:num)', 'Aset::requestdec/$1');
	$routes->post('aset/statusbarang/(:num)', 'Aset::statusbarang/$1');
	
	$routes->get('tambahaset', 'Aset::tambah');
	$routes->post('tambahaset/process', 'Aset::process');
	$routes->get('aset/edit/(:any)', 'Aset::edit/$1');
	$routes->post('aset/update/(:any)', 'Aset::update/$1');	
	$routes->get('aset/delete/(:any)', 'Aset::delete/$1');

	$routes->get('tambahuser', 'TambahUsers::index');
	$routes->post('tambahuser/process', 'TambahUsers::process');
});
$routes->get('/login', 'Login::index');
$routes->post('/login/process', 'Login::process');
$routes->get('/logout', 'Login::logout');
/*
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
