<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('index');
    $router->get('/test', 'HomeController@test')->name('test');
    $router->group(['prefix' => 'users'], function ($router) {
        $router->get('index', 'UserController@index');
    });
    $router->get('users', 'UserController@index')->name('users');

});
