<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->group('admin',static function ($routes) {
    $routes->get('categories', 'Admin\CategoriesController::index');
    $routes->get('categories/add', 'Admin\CategoriesController::add', ['as' => 'category_add']);
});
