<?php

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

$router->group(['prefix' => 'auth'], function($router) {
    $router->post('/signin', 'AuthController@signIn');
});

$router->group([
    'middleware' => 'auth:api',
    'prefix' => 'users',
], function($router) {
    $router->get('/me', 'UserController@getAuthUser');
});

$router->group(['middleware' => 'auth:api'], function ($router) {
    $router->get('/always/true', function () {
        return response()->json(['ok' => 'ok']);
    });
});

$router->get('/test', function() {
    return response()->json([
        'message' => 'Ce hello world vient de l\'API'
    ]);
});


$router->get('/test2', 'GradeController@getAll');
$router->get('/Subject/All', 'SubjectController@getAll');
$router->post('/Subject/Add', 'SubjectController@createSubject');
$router->get('Ue/All', 'UeController@getAll');
$router->post('Ue/Add', 'UeController@createUe');
