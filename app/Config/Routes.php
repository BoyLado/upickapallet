<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('NavigationController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override(function(){
    return view('404');
});
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'NavigationController');

/*
 *  ------------------------------------------------------------------
 *  FRONT END NAVIGATION 
 *  ------------------------------------------------------------------
 */
$routes->get('sign-up', 'NavigationController::signUp');
$routes->get('login', 'NavigationController::login');

$routes->get('home', 'NavigationController::home');
$routes->get('who-we-are', 'NavigationController::whoWeAre');
$routes->get('contact-us', 'NavigationController::contactUs');
$routes->get('faqs', 'NavigationController::faqs');

/*
 * --------------------------------------------------------------------
 * FRONT END FUNCTIONS
 * --------------------------------------------------------------------
 */
$routes->post('customer-login', 'IndexController::login');
$routes->post('user-forgot-password', 'IndexController::forgotPassword');
$routes->post('user-change-password', 'IndexController::changePassword');
$routes->post('customer-sign-up', 'IndexController::signUp');
$routes->get('customer-logout', 'IndexController::logout');

/*
 *  ------------------------------------------------------------------
 *  BACK END NAVIGATION 
 *  ------------------------------------------------------------------
 */

$routes->get('portal/home', 'Portal\NavigationController::home');
$routes->get('portal/who-we-are', 'Portal\NavigationController::whoWeAre');
$routes->get('portal/contact-us', 'Portal\NavigationController::contactUs');
$routes->get('portal/faqs', 'Portal\NavigationController::faqs');

//////////////////////////// MY ACCOUNT ////////////////////////////////
$routes->get('my-account', 'Portal\NavigationController::myAccount');


/*
 *  ------------------------------------------------------------------
 *  BACK END FUNCTIONS 
 *  ------------------------------------------------------------------
 */







/////////////////////////////////////////////////////////////////////
//////////////////////////// MY ACCOUNT /////////////////////////////
/////////////////////////////////////////////////////////////////////

$routes->get('load-my-account', 'Portal\MyAccountController::loadMyAccount');
$routes->post('change-my-account-picture', 'Portal\MyAccountController::changeMyAccountPicture');
$routes->get('load-my-account-details', 'Portal\MyAccountController::loadMyAccountDetails');
$routes->post('edit-my-account-details', 'Portal\MyAccountController::editMyAccountDetails');
$routes->post('edit-my-account-password', 'Portal\MyAccountController::editMyAccountPassword');


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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
