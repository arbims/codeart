<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->group('admin',static function ($routes) {
    $routes->get('categories', 'Admin\CategoriesController::index');
    $routes->match(['get','post'], 'categories/add', 'Admin\CategoriesController::add', ['as' => 'category_add']);
    $routes->match(['get','put'], 'categories/edit/(:num)', 'Admin\CategoriesController::edit/$1', ['as' => 'category_edit']);
    $routes->get('categories/delete/(:num)', 'Admin\CategoriesController::delete/$1');
});
