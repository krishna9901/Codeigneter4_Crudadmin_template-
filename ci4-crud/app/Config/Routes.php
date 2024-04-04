<?php

use CodeIgniter\Router\RouteCollection;
use App\Config\Controllers;


/**
 * @var RouteCollection $routes
 */


//$routes->get('/', 'Home::index');



$routes->get('/', 'Signin::index');
$routes->get('logout', 'Crud::logout');

$routes->get('/signup', 'Signup::index');
$routes->match(['get', 'post'], 'Signup/store', 'Signup::store');
$routes->match(['get', 'post'], 'Signin/loginAuth', 'Signin::loginAuth');
$routes->get('signin', 'Signin::index');
$routes->get('/profile', 'Profile::index',['filter' => 'authGuard']);
// $routes->get('/profile', 'Crud::index',['filter' => 'authGuard']);



$routes->get('/crud', 'Profile::index');
//$routes->post('crud/add', 'Crud::add');
$routes->get('/crud/add', 'Profile::add');
$routes->get('/crud/add_validation','Profile::add_validation');
//$routes->post('crud/add_validation','Crud::')
$routes->post('/crud/add_validation', 'Profile::add_validation');
$routes->get('/crud/fetch_single_data/(:num)', 'Profile::fetch_single_data/$1');
$routes->post('/crud/edit_validation', 'Profile::edit_validation');
$routes->get('/crud/delete/(:num)', 'Profile::delete/$1');





