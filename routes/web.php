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


/*TopicController : classname
index : method
*/
$router->get('/login', 'AuthController@login');

function resourse($router, $url, $model)
{
    $router->get($url, $model.'Controller@index');
    $router->get($url.'/{id}', $model.'Controller@show');
    $router->post($url, $model.'Controller@store');
    $router->put($url.'/{id}', $model.'Controller@update');
    $router->delete($url.'/{id}', $model.'Controller@destroy');
}


/* rutas protegitas por el login (autenticacion) - si un usuaria no envia un token valido entonces no puede 
estrar a esta rutas */
$router ->group(['middleware' => 'auth'], function() use($router){
resourse($router, '/topics', 'Topic');
resourse($router, '/users', 'User');
resourse($router, '/posts', 'Post');
});


/* $router->get('/topics', 'TopicController@index');
$router->get('/topics/{id}', 'TopicController@show');
$router->post('/topics', 'TopicController@store');
$router->put('/topics/{id}', 'TopicController@update');
$router->delete('/topics/{id}', 'TopicController@destroy');


$router->get('/users', 'UserController@index');
$router->get('/users/{id}', 'UserController@show');
$router->post('/users', 'UserController@store');
$router->put('/users/{id}', 'UserController@update');
$router->delete('/users/{id}', 'UserController@destroy'); */
