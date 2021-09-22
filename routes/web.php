<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/login/{user}/{pass}', 'AuthController@login');

$router->group(['middleware'=>['auth']], function() use($router){
    $router->get('/u', 'UserController@index');
    $router->get('/u/{user}', 'UserController@get');
    $router->post('/u', 'UserController@create');
    $router->put('/u/{user}', 'UserController@update');
    $router->delete('/u/{user}', 'UserController@destroy');

    $router->get('/t', 'TopicController@index');
    $router->get('/t/{id}', 'TopicController@get');
    $router->post('/t', 'TopicController@create');
    $router->put('/t/{id}', 'TopicController@update');
    $router->delete('/t/{id}', 'TopicController@destroy');

    $router->get('/p', 'PostController@index');
    $router->get('/p/{id_topic}', 'PostController@get');
    $router->post('/p', 'PostController@create');
    $router->put('/p/{id}', 'PostController@update');
    $router->delete('/p/{id}', 'PostController@destroy');
}
);
