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

    $routes->get('technologies', 'Admin\TechnologiesController::index');
    $routes->match(['get','post'], 'technologies/add', 'Admin\TechnologiesController::add', ['as' => 'technology_add']);
    $routes->match(['get','put'], 'technologies/edit/(:num)', 'Admin\TechnologiesController::edit/$1', ['as' => 'technology_edit']);
    $routes->get('technologies/delete/(:num)', 'Admin\TechnologiesController::delete/$1');

    $routes->get('posts', 'Admin\PostsController::index');
    $routes->match(['get','post'], 'posts/add', 'Admin\PostsController::add', ['as' => 'post_add']);
    $routes->match(['get','put'], 'posts/edit/(:num)', 'Admin\PostsController::edit/$1', ['as' => 'post_edit']);
    $routes->get('posts/delete/(:num)', 'Admin\PostsController::delete/$1');

    // search action
    $routes->get('search/get-technologies', 'Admin\TechnologiesController::getTechnologies');
});
