<?php

use Illuminate\Routing\Router;

$attributes = [
    'prefix' => config('admin.route.prefix'),
    'namespace' => 'Encore\Admin\Controllers',
    'middleware' => config('admin.route.middleware'),
];

//laravel-admin default routes
app('router')->group($attributes, function ($router) {

    /* @var \Illuminate\Routing\Router $router */
    $router->group([], function ($router) {

        /* @var \Illuminate\Routing\Router $router */
        $router->get('auth/users/{id}/show', '\App\Admin\Controllers\AdminController@show'); //use custom route
        $router->get('auth/users/{id}/edit', '\App\Admin\Controllers\AdminController@edit'); //use custom route
        $router->resource('auth/users', '\App\Admin\Controllers\AdminController');
        $router->resource('auth/roles', 'RoleController');
        $router->resource('auth/permissions', 'PermissionController');
        $router->resource('auth/menu', 'MenuController', ['except' => ['create']]);
        $router->resource('auth/logs', 'LogController', ['only' => ['index', 'destroy']]);
    });

    $router->get('auth/login', 'AuthController@getLogin');
    $router->post('auth/login', 'AuthController@postLogin');
    $router->get('auth/logout', 'AuthController@getLogout');
    $router->get('auth/setting', 'AuthController@getSetting');
    $router->put('auth/setting', 'AuthController@putSetting');
});

 //default routes end


Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('index');
    $router->get('/test', 'HomeController@test')->name('test');
    $router->group(['prefix' => 'users'], function ($router) {
        $router->get('index', 'UserController@index');
    });
    $router->get('users', 'UserController@index')->name('users');

    $router->get('/users/{id}/edit', 'UserController@edit')->name('edit');
    $router->get('/users/create', 'UserController@create')->name('create');
    $router->resource('users', 'UserController', ['only' => ['update', 'destroy']]);

    $router->get('users/{id}', 'UserController@show')->name('show');

    $router->get('messages', 'MessagesController@index')->name('messages');
    $router->get('/messages/{id}/edit', 'MessagesController@edit')->name('edit');
    $router->get('/messages/create', 'MessagesController@create')->name('create');
    $router->resource('messages', 'MessagesController', ['only' => ['update', 'store', 'destroy']]);
    $router->get('messages/{id}', 'MessagesController@show')->name('show');
});
