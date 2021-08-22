<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('MainController');
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
$webRoute = [];

$webRoute['/'] = 'MainController::index';
$webRoute['about'] = 'MainController::about';
$webRoute['contact'] = 'MainController::contact';
$webRoute['news'] = 'MainController::news';
$webRoute['newsDetails'] = 'MainController::newsDetails';
$webRoute['publications'] = 'MainController::publications';
$webRoute['publicationDetails'] = 'MainController::publicationDetails';
//=====================================
$webRoute['corporate'] = 'MainController::corporate';
$webRoute['realEstate'] = 'MainController::realEstate';
$webRoute['ngo'] = 'MainController::ngo';
$webRoute['tax'] = 'MainController::tax';
$webRoute['employment'] = 'MainController::employment';
$webRoute['banking'] = 'MainController::banking';
$webRoute['competition'] = 'MainController::competition';
$webRoute['litigation'] = 'MainController::litigation';
$webRoute['energy'] = 'MainController::energy';
$webRoute['privateClient'] = 'MainController::privateClient';
$webRoute['shipping'] = 'MainController::shipping';
$webRoute['realEstate'] = 'MainController::realEstate';

//=================ADMIN ROUTES====================

$webRoute['login'] = 'Auth::login';
$webRoute['dashBoard'] = 'AdminController::dashBoard';
$webRoute['register'] = 'Auth::register';
$webRoute['blog'] = 'BlogController::index';
$webRoute['viewBlog'] = 'BlogController::viewSingleBlog';
$webRoute['deleteBlog/(:any)'] = 'BlogController::deleteBlog/$1';
$webRoute['articles'] = 'ArticlesController::index';

$routes->map($webRoute);

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}