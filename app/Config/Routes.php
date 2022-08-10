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

$routes->get('/rol','Trabajador/Rol::crear');
// $routes->get('/roles','Trabajador/Rol::mostrarRoles');
// $routes->get('/empleado','Trabajador/Employee::index');
// $routes->get('/login','Auth/Register::index');

$routes->group('/', ['namespace' => 'App\Controllers\Inicio'], function($routes){
	$routes->get('', 'Home::index');
});

$routes->group('/auth', ['namespace' => 'App\Controllers\Auth'], function($routes){
	$routes->get('registrarse', 'Register::registro', ['as' => 'registro']);
	$routes->post('signup', 'Register::signup');

	$routes->get('ingresar', 'Register::ingresar', ['as' => 'ingresar']);
	$routes->post('signin', 'Register::signin');

	$routes->get('logout', 'Register::logout', ['as' => 'logout']);
});

$routes->group('/admin', ['namespace' => 'App\Controllers\Admin', 'filter' => 'auth:Admin'], function($routes){
	$routes->get('Dashboard', 'Panel::index', ['as' => 'dashboard']);
	$routes->get('Calendar', 'Calendar::index', ['as' => 'calendar']);
	$routes->get('Pets', 'Pet::index', ['as' => 'pets']);
	#NOTA: NO SE HA CREADO LA VISTA "DATES"
	$routes->get('Dates', 'Dates::index', ['as' => 'dates']);
	$routes->get('Clients', 'Client::index', ['as' => 'client']);
	$routes->get('Employee', 'Employee::index', ['as' => 'employee']);
	$routes->get('User', 'User::index', ['as' => 'user']);

	#Insertar datos a la DB
	$routes->post('newClient', 'Client::insertClient');
	$routes->post('newPet', 'Pet::insertPet');
	$routes->post('newEmployee', 'Employee::insertEmployee');
	$routes->post('newUser', 'User::insertUser');

	#Obtener registros de la DB para actualizarlos
	#Cliente
	$routes->get('getClient/(:any)','Client::getClient/$1');
	#Mascota
	$routes->get('getPet/(:any)','Pet::getPet/$1');

	#Actualizar datos
	#Cliente
	$routes->post('updateClient', 'Client::update');
	#Mascota
	$routes->post('updatePet', 'Pet::update');

	#Eliminar datos
	#Cliente
	$routes->get('deleteClient/(:any)', 'Client::delete/$1');
});

$routes->group('/invitado', ['namespace' => 'App\Controllers\Invitado', 'filter' => 'invite:Invitado'], function($routes){
	$routes->get('inicio', 'Home::index', ['as' => 'invitados']);
});

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
